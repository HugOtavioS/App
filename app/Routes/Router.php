<?php
namespace App\Routes;

use App\Request;
use App\Routes\RouteError;
use App\Session;
use App\Utils;

/** 
 * Classe responsável por gerenciar as rotas da aplicação.
 * 
 * Responsável por lidar com o registro, verificação e execução das rotas da aplicação.
 */
class Router {
    public static $routes = [];
    public Request $request;
    public RouteError $routeError;
    public Session $session;
    public Utils $utils;

    public function __construct(Request $request, RouteError $routeError) {

        $this->request = $request;
        $this->routeError = $routeError;
        $this->session = new Session();
        $this->utils = new Utils();

    }

    public static function addRoute (string $route, string $method, string $controller, string $action):void {

        self::$routes[] = [
            'route' => self::handleRoute($route),
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];

    }

    public static function addProtectedRoute (string $route, string $method, string $controller, string $action) {
        self::$routes[] = [
            'route' => self::handleRoute($route),
            'controller' => $controller,
            'action' => $action,
            'method' => $method,
            "protected" => true
        ];
    }

    public static function getRoutes ():array {

        return self::$routes;

    }

    public function registerRoutes ():void {

        $uri = $this->request->getUri("=");
        $verb = $this->request->getMethod();
        
        if (empty(self::$routes)) {
            $this->routeError->routeNotFound();
        }

        $route = $this->verifyUri($uri, $verb);
        $this->handleController($route);

    }

    private static function handleRoute (string $route) {
        return explode("=", $route)[0];
    }
    
    /** Lida com a criação do objeto e ação do controller */
    private function handleController (array $route):void {

        $controller = $this->verifyController($route["controller"]);

        $controllerInstance = new $controller();
        $action = $this->verifyAction($controllerInstance, $route["action"]);
        
        $controllerInstance->$action();

    }

    private function verifyVerb (array $routes):array {

        $i = false;
        foreach ($routes as $route) {
            if ($this->request->getMethod() == $route["method"]) {
                $i = $route;
                break;
            }
        }

        if (empty($i)) {
            $this->routeError->verbNotAllowed();
        }

        return $i;
        
    }

    private function verifyUri (string $uri, string $verb):array {
        // Verifica se a rota existe
        $routes = [];
        foreach (self::$routes as $key => $value) {
            if ($this->utils->array_value_exists($value, $uri, "route")) {
                $routes[] = $value;
            }
        }

        if (count($routes) <= 0) {
            $this->routeError->routeNotFound();
        }

        $this->session->init();
        // Verifica se a rota (especifica do verbo acessado) é protegida
        foreach ($routes as $route) {
            if ($verb == $route["method"] and array_key_exists("protected", $route)) {
                if (!$this->session->get("session_login")) {
                    $this->routeError->routeNotFound();
                }
            }
        }

        $route = $this->verifyVerb($routes);

        return $route;

    }

    private function verifyController ($controller):mixed {

        if (!class_exists($controller)) {
            $this->routeError->controllerNotFound();
        }

        return $controller;

    }

    private function verifyAction ($controllerInstance, $action) {

        if (!method_exists($controllerInstance, $action)) {
            $this->routeError->actionNotFound();
        }

        return $action;
        
    }
}