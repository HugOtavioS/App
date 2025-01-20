<?php
namespace App\Routes;

use App\Interfaces\handleRouteInterface;
use App\Utils;
use App\Routes\RouteError;

class handleRoute implements handleRouteInterface {

    private Utils $utils;
    private RouteError $routeError;

    public function __construct(Utils $utils, RouteError $routeError) {
        $this->utils = $utils;
        $this->routeError = $routeError;
    }

    public function handleRoute (string $route):string {
        return explode("=", $route)[0];
    }

    public function handleController (array $route):void {
        $controller = $this->utils->verifyController($route["controller"], $this->routeError);

        $controllerInstance = new $controller();
        $action = $this->utils->verifyAction($controllerInstance, $route["action"], $this->routeError);
        
        $controllerInstance->$action();
    }
}