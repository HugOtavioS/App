<?php
namespace App\Routes;

use App\Request;
use App\Routes\RouteError;
use App\Session;

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

    public function __construct(Request $request, RouteError $routeError) {

        $this->request = $request;
        $this->routeError = $routeError;
        $this->session = new Session();

    }

    public static function addRoute (string $route, string $method, string $controller, string $action):void {

        self::$routes[self::handleRoute($route)] = [
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];

    }

    public static function addProtectedRoute (string $route, string $method, string $controller, string $action) {
        self::$routes[self::handleRoute($route)] = [
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

        if (empty(self::$routes)) {
            $this->routeError->routeNotFound();
        }

        $this->verifyUri($uri);
        $this->handleController($uri);

    }

    private static function handleRoute (string $route) {
        return explode("=", $route)[0];
    }
    
    /** Lida com a criação do objeto e ação do controller */
    private function handleController (string $uri):void {

        $controller = $this->verifyController(self::$routes[$uri]["controller"]);

        $controllerInstance = new $controller();
        $action = $this->verifyAction($controllerInstance, self::$routes[$uri]["action"]);
        
        $controllerInstance->$action();

    }

    private function verifyVerb (string $uri):void {

        if ($this->request->getMethod() != self::$routes[$uri]["method"]) {
            $this->routeError->verbNotAllowed();
        }
        
    }

    private function verifyUri (string $uri):void {

        if (!array_key_exists($uri, self::$routes)) {
            $this->routeError->routeNotFound();
        }

        $this->session->init();

        if (array_key_exists("protected", self::$routes[$uri])) {
            if (!$this->session->get("session_login")) {
                $this->routeError->routeNotFound();
            }
        }

        $this->verifyVerb($uri);

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