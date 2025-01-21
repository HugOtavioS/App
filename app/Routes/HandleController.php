<?php
namespace App\Routes;

use App\Interfaces\handleControllerInterface;
use App\Utils;
use App\Routes\RouteError;

class handleController implements handleControllerInterface {

    private Utils $utils;
    private RouteError $routeError;

    public function __construct(Utils $utils, RouteError $routeError) {
        $this->utils = $utils;
        $this->routeError = $routeError;
    }

    public function handleController (array $route):void {
        $controller = $this->utils->verifyController($route["controller"], $this->routeError);

        $controllerInstance = new $controller();
        $action = $this->utils->verifyAction($controllerInstance, $route["action"], $this->routeError);
        
        $controllerInstance->$action();
    }
}