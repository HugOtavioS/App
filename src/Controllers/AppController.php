<?php
namespace Src\Controllers;

use Src\Controllers\ViewController;
use Config\Database\DatabaseError;
use Config\Database\Database;
use Config\env;
use Src\Request\Request;
use Src\Session;

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