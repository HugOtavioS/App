<?php
namespace Controllers;

use Controllers\ViewController;

class HomeController {
    private $view;

    public function __construct () {
        $this->view = new ViewController();
    }

    public function index () {
        $this->view->load("home", ["title" => "Home"]);
    }
}