<?php
namespace App\Controllers;

use App\Controllers\ViewController;
use Config\Database\DatabaseError;
use Config\database;
use Config\env;
use App\Request;
use App\Session;

class LoginController {
    private $view;
    private $db;

    public function __construct () {

        $this->view = new ViewController();
        $this->db = new database(new env, new DatabaseError);

    }
    
    public function index() {

        $this->view->load("login", ["title" => "Login"]);

    }

    public function create () {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        Session::init();

        if (count($this->db->select(["*"],"users", "email = '$email' and senha = $senha")) > 0) {

            if (!Session::get("session_login")) {
                Session::set("session_login", "$email");
            }

        
            Request::redirect("/");

        } else {

            Request::redirect("/login?error=0");

        }
        
        Session::destroy();

    }

    public function logout () {

        Session::init();
        Session::delete("session_login");
        Session::destroy();
        Request::redirect("/");
        
    }
}