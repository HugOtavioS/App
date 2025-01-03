<?php
namespace App\Routes;

use App\Request;
use App\Routes\RouteError;

class Router {

    public static $routes = [];
    public Request $request;
    public routeError $routeError;

    public function __construct(Request $request) {
        $this->request = $request;
        $this->routeError = new routeError();
    }

    public static function addRoute (string $route, string $method, string $controller, string $action):void {
        self::$routes[$route] = [
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];
    }

    public static function getRoutes ():array {
        return self::$routes;
    }

    public function handleRoute ():void {
        $uri = $this->request->getUri();

        if (empty(self::$routes)) {
            $this->routeError->routeNotFound();
        }

        $this->verifyVerb(self::$routes[$uri]["method"]);

        $this->verifyUri($uri);

        $this->handleController($uri);
    }
    
    /** Lida com a criação do objeto, */
    private function handleController ($uri) {
        $controller = $this->verifyController(self::$routes[$uri]["controller"]);

        $controllerInstance = new $controller();
        $action = $this->verifyAction($controllerInstance, self::$routes[$uri]["action"]);
        
        $controllerInstance->$action();
    }

    private function verifyVerb (string $method):void {

        if ($this->request->getMethod() != $method) {
            $this->routeError->verbNotAllowed();
        }
        
    }

    private function verifyUri (string $uri):void {
        $uri = explode("?", $uri)[0];

        if (!array_key_exists($uri, self::$routes)) {
            $this->routeError->routeNotFound();
        }
    }

    private function verifyController ($controller) {
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