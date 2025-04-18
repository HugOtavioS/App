<?php
namespace Controllers;

use Controllers\Interfaces\ControllerInterface;
use Controllers\ViewController;
use Config\Database;

class AppController implements ControllerInterface {

    private $view;
    private $db;

    public function __construct () {
        $this->view = new ViewController();
        $this->db = new Database();
    }
    
    public function index(...$args) {
        $this->view->load("app", ["title" => "App"]);
    }

    public function create () {

    }

    public function logout () {
        
    }
}