<?php

namespace Router;

use Router\Interfaces\RouterInterface;
use Http\Interfaces\RequestInterface;
use Http\Request;
use Router\VerifyRoutes;
use Router\CallCallback;

class Router implements RouterInterface {

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
            "api" => false
        ];
    }

    public static function addProtectedRoute($method, $uri, $callback) {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "callback" => $callback,
            "protected" => true,
            "api" => false
        ];
    }

    public static function addApiRoute($method, $uri, $callback) {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "callback" => $callback,
            "protected" => true,
            "api" => true
        ];
    }

    public static function addFreeRoute($method, $uri, $callback) {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "callback" => $callback,
            "protected" => false,
            "api" => false,
            "free" => true
        ];
    }

    public static function getRoutes() {
        return self::$routes;
    }
}