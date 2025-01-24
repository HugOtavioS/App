<?php
namespace App\Routes;

use App\Routes\Interfaces\InterfaceRouteError;
use App\Utils;

/**
 * Classe responsável por lidar com as rotas da aplicação
 */
class Router {
    public static $routes = [];
    public InterfaceRouteError $routeError;
    public static Utils $utils;
    private static AddRoute $addRoute;
    private static GetRoutes $getRoutes;
    private static HandleController $handleController;
    private VerifyUri $verifyUri;
    private VerifyProtectedRoute $verifyProtectedRoute;
    private VerifyVerb $verifyVerb;
    private static VerifyRoute $verifyRoute;
    private RegisterRoutes $registerRoutes;

    public function __construct(
        InterfaceRouteError $routeError,
        Utils $utils,
        AddRoute $addRoute,
        GetRoutes $getRoutes,
        HandleController $handleController,
        VerifyUri $verifyUri,
        VerifyProtectedRoute $protectedRoute,
        VerifyVerb $verifyVerb,
        VerifyRoute $verifyRoute,
        RegisterRoutes $registerRoutes
    ) {

        $this->routeError = $routeError;
        self::$utils = $utils;
        self::$addRoute = $addRoute;
        self::$getRoutes = $getRoutes;
        self::$handleController = $handleController;
        $this->verifyUri = $verifyUri;
        $this->verifyProtectedRoute = $protectedRoute;
        $this->verifyVerb = $verifyVerb;
        self::$verifyRoute = $verifyRoute;
        $this->registerRoutes = $registerRoutes;

    }

    public static function addRoute (string $route, string $method, string $controller, string $action):void {

        if (self::$verifyRoute->verifyRoute(self::$routes, self::$utils->separator($route, 0, "="), $method)) return;

        self::$routes[] = self::$addRoute->addRoute($route, $method, $controller, $action);

    }

    public static function addProtectedRoute (string $route, string $method, string $controller, string $action):void {

        if (self::$verifyRoute->verifyRoute(self::$routes, self::$utils->separator($route, 0, "="), $method)) return;

        self::$routes[] = self::$addRoute->addProtectedRoute($route, $method, $controller, $action);

    }

    public static function getRoutes ():array {

        return self::$getRoutes->getRoutes(self::$routes);

    }

    // Trata e garante que a rota seja valida
    public function registerRoutes ():void {
        
        $this->registerRoutes->registerRoutes(self::$routes);


    }

    // Separa a URI dos parâmetros
    public static function handleRoute (string $route):string {

        return self::$utils->separator($route, 0, "=");

    }
    
    // Lida e trata do controller correspondente a rota solicitada
    protected function handleController (array $route):void {

        $this->handleController->handleController($route);

    }

    // Verifica se o verbo HTTP está permitido para a URL
    protected function verifyVerb (array $routes) {

        $this->verifyVerb->verifyVerb($routes);

    }

    // Verifica se a rota existe
    protected function verifyUri (string $uri):array {

        return $this->verifyUri->verifyUri($uri, self::$routes);

    }

    // Verifica se a rota é protegida
    protected function verifyProtectedRoute (array $route):void {

        $this->verifyProtectedRoute->verifyProtectedRoute($route);

    }

}