<?php
namespace Src\Route\Classes;

use Src\Controllers\ViewController;
// use Src\Route\Interfaces\InterfaceRouteError;

class RouteError  {

    private ViewController $view;

    public function __construct () {
        $this->view = new ViewController;
    }

    public function error ($mensage = ["msg" => "Service Not Found"], $code = 404):void {
        $this->view->load($code, $mensage);
        exit;
    }
    
}