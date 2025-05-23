<?php

namespace Router;

use Http\Interfaces\RequestInterface;
use Http\Request;
use Router\VerifyRoutes;
use Router\CallCallback;

class Router {

    public static $routes = [];
    private Request $request;

    public function __construct(RequestInterface $request) {
        $this->request = $request;
    }

    public function run() {
        $verifyRoutes = new VerifyRoutes($this->request, self::$routes);
        $route = $verifyRoutes->verifyRoutes();
        $callCallback = new CallCallback($route);
        $callCallback->callCallback();
    }

    public static function addRoute($method, $uri, $callback) {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "callback" => $callback,
            "protected" => false,
            "admin" => false
        ];
    }

    public static function addProtectedRoute($method, $uri, $callback) {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "callback" => $callback,
            "protected" => true,
            "admin" => false
        ];
    }

    public static function addAdminRoute($method, $uri, $callback) {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "callback" => $callback,
            "protected" => true,
            "admin" => true
        ];
    }

    public static function getRoutes() {
        return self::$routes;
    }
}