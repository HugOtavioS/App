<?php
namespace App\Routes;

use App\Request;
use App\Routes\RouteError;
use App\Session;
use App\Utils;

/**
 * Classe responsável por lidar com as rotas da aplicação
 */
class Router {
    public static $routes = [];
    public RouteError $routeError;
    public Utils $utils;

    public function __construct(RouteError $routeError, Utils $utils) {

        $this->routeError = $routeError;
        $this->utils = $utils;

    }

    public static function addRoute (string $route, string $method, string $controller, string $action):void {

        self::$routes[] = [
            'route' => self::handleRoute($route),
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];

    }

    public static function addProtectedRoute (string $route, string $method, string $controller, string $action):void {
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

    // Trata e garante que a rota seja valida
    public function registerRoutes ():void {

        $uri = Request::getUri("=");
        
        if (empty(self::$routes)) {
            $this->routeError->routeNotFound();
        }

        $routes = $this->verifyUri($uri);

        $route = $this->verifyVerb($routes);

        $this->verifyProtectedRoute($uri, $route);

        $this->handleController($route);

    }

    // Separa a URI dos parâmetros
    public static function handleRoute (string $route):string {

        return explode("=", $route)[0];
        
    }
    
    // Lida e trata do controller correspondente a rota solicitada
    protected function handleController (array $route):void {

        $controller = $this->verifyController($route["controller"]);

        $controllerInstance = new $controller();
        $action = $this->verifyAction($controllerInstance, $route["action"]);
        
        $controllerInstance->$action();

    }

    // Verifica se o verbo HTTP está permitido para a URL
    protected function verifyVerb (array $routes) {

        foreach ($routes as $route) {

            if (Request::getVerb() == $route["method"]) {
                return $route;
            }

            $this->routeError->verbNotAllowed();

        }

    }

    // Verifica se a rota existe
    protected function verifyUri (string $uri):array {

        $routes = [];

        foreach (self::$routes as $value) {

            if ($this->utils->array_value_exists($value, $uri, "route")) {
                $routes[] = $value;
            }

        }

        if (count($routes) <= 0) {

            $this->routeError->routeNotFound();

        }

        return $routes;

    }

    // Verifica se a rota é protegida
    protected function verifyProtectedRoute (string $uri, array $route):void {

        Session::init();

        if (array_key_exists("protected", $route) and !Session::get("session_login")) {

            $this->routeError->routeNotFound();

        }

    }

    protected function verifyController ($controller):mixed {

        if (!class_exists($controller)) {

            $this->routeError->controllerNotFound();

        }

        return $controller;

    }

    protected function verifyAction ($controllerInstance, $action): mixed {

        if (!method_exists($controllerInstance, $action)) {

            $this->routeError->actionNotFound();
            
        }

        return $action;
        
    }
}