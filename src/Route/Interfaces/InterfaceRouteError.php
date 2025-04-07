<?php
namespace Src\Route\Interfaces;

interface InterfaceRouteError {
    public function routeNotFound ():void;
    public function verbNotAllowed ():void;
    public function controllerNotFound ():void;
    public function actionNotFound ():void;
}