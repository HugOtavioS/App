<?php
namespace App\Routes;

use App\Controllers\ViewController;
use App\Interfaces\InterfaceRouteError;

class RouteError implements InterfaceRouteError {

    private ViewController $view;

    public function __construct (ViewController $view) {
        $this->view = $view;
    }

    public function routeNotFound ():void {
        $this->view->load("404", ["msg" => "Route Not Found"]);
        exit;
    }

    public function verbNotAllowed ():void {
        $this->view->load("404", ["msg" => "Verb Not Allowed"]);
        exit;
    }

    public function controllerNotFound ():void {
        $this->view->load("404", ["msg" => "Controller Not Found"]);
        exit;
    }

    public function actionNotFound ():void {
        $this->view->load("404", ["msg" => "Action Not Found"]);
        exit;
    }
}