<?php
namespace Controllers;

use Controllers\ViewController;
use Config\Database;

class AppController {

    private $view;
    private $db;

    public function __construct () {
        $this->view = new ViewController();
        $this->db = new Database();
    }
    
    public function index() {
        $this->view->load("app", ["title" => "App"]);
    }

    public function create () {

    }

    public function logout () {
        
    }
}