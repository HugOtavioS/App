<?php
namespace App\Routes;

use App\Routes\Interfaces\handleControllerInterface;
use App\Routes\Interfaces\InterfaceRouteError;
use App\Utils;

class handleController implements handleControllerInterface {

    private Utils $utils;
    private InterfaceRouteError $routeError;

    public function __construct(Utils $utils, InterfaceRouteError $routeError) {
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