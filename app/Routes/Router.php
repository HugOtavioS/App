<?php
namespace App\Routes;

use App\Routes\RouteError;
use App\Utils;

/**
 * Classe responsável por lidar com as rotas da aplicação
 */
class Router {
    public static $routes = [];
    public RouteError $routeError;
    public Utils $utils;
    private static AddRoute $addRoute;
    private static GetRoutes $getRoutes;
    private static HandleRoute $handleRoute;
    private VerifyUri $verifyUri;
    private VerifyProtectedRoute $verifyProtectedRoute;
    private VerifyVerb $verifyVerb;
    private RegisterRoutes $registerRoutes;

    public function __construct(
        RouteError $routeError,
        Utils $utils,
        AddRoute $addRoute,
        GetRoutes $getRoutes,
        HandleRoute $handleRoute,
        VerifyUri $verifyUri,
        VerifyProtectedRoute $protectedRoute,
        VerifyVerb $verifyVerb,
        RegisterRoutes $registerRoutes
    ) {

        $this->routeError = $routeError;
        $this->utils = $utils;
        self::$addRoute = $addRoute;
        self::$getRoutes = $getRoutes;
        self::$handleRoute = $handleRoute;
        $this->verifyUri = $verifyUri;
        $this->verifyProtectedRoute = $protectedRoute;
        $this->verifyVerb = $verifyVerb;
        $this->registerRoutes = $registerRoutes;

    }

    public static function addRoute (string $route, string $method, string $controller, string $action):void {

        self::$routes[] = self::$addRoute->addRoute($route, $method, $controller, $action);

        // self::$routes[] = [
        //     'route' => self::handleRoute($route),
        //     'controller' => $controller,
        //     'action' => $action,
        //     'method' => $method
        // ];

    }

    public static function addProtectedRoute (string $route, string $method, string $controller, string $action):void {

        self::$routes[] = self::$addRoute->addProtectedRoute($route, $method, $controller, $action);

        // self::$routes[] = [
        //     'route' => self::handleRoute($route),
        //     'controller' => $controller,
        //     'action' => $action,
        //     'method' => $method,
        //     "protected" => true
        // ];
    }

    public static function getRoutes ():array {

        return self::$getRoutes->getRoutes(self::$routes);

    }

    // Trata e garante que a rota seja valida
    public function registerRoutes ():void {

        $this->registerRoutes->registerRoutes(self::$routes);

        // $uri = Request::getUri("=");
        
        // if (empty(self::$routes)) {
        //     $this->routeError->routeNotFound();
        // }

        // $routes = $this->verifyUri($uri);

        // $route = $this->verifyVerb($routes);

        // $this->verifyProtectedRoute($route);

        // $this->handleController($route);

    }

    // Separa a URI dos parâmetros
    public static function handleRoute (string $route):string {

        return self::$handleRoute->handleRoute($route);

        // return explode("=", $route)[0];
        
    }
    
    // Lida e trata do controller correspondente a rota solicitada
    protected function handleController (array $route):void {

        $this->handleRoute->handleController($route);

        // $controller = $this->utils->verifyController($route["controller"], $this->routeError);

        // $controllerInstance = new $controller();
        // $action = $this->utils->verifyAction($controllerInstance, $route["action"], $this->routeError);
        
        // $controllerInstance->$action();

    }

    // Verifica se o verbo HTTP está permitido para a URL
    protected function verifyVerb (array $routes) {

        $this->verifyVerb->verifyVerb($routes);

        // foreach ($routes as $route) {

        //     if (Request::getVerb() == $route["method"]) {
        //         return $route;
        //     }

        //     $this->routeError->verbNotAllowed();

        // }

    }

    // Verifica se a rota existe
    protected function verifyUri (string $uri):array {

        return $this->verifyUri->verifyUri($uri, self::$routes);

        // $routes = [];

        // foreach (self::$routes as $value) {

        //     if ($this->utils->array_value_exists($value, $uri, "route")) {
        //         $routes[] = $value;
        //     }

        // }

        // if (count($routes) <= 0) {

        //     $this->routeError->routeNotFound();

        // }

        // return $routes;

    }

    // Verifica se a rota é protegida
    protected function verifyProtectedRoute (array $route):void {

        $this->verifyProtectedRoute->verifyProtectedRoute($route);

        // Session::init();

        // if (array_key_exists("protected", $route) and !Session::get("session_login")) {

        //     $this->routeError->routeNotFound();

        // }

    }

}