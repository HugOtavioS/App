<?php
namespace tests\Routes;

use App\Interfaces\InterfaceRouteError;

class RouteError implements InterfaceRouteError {
    public function routeNotFound ():void {
        exit("Route noty found");
    }

    public function verbNotAllowed ():void {
        exit("Verb not allowed");
    }

    public function controllerNotFound ():void {
        exit("Controller not found");
    }

    public function actionNotFound ():void {
        exit("Action not found");
    }
}