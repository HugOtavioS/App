<?php
namespace App\Routes\Interfaces;

interface InterfaceRouteError {
    public function routeNotFound ():void;
    public function verbNotAllowed ():void;
    public function controllerNotFound ():void;
    public function actionNotFound ():void;
}