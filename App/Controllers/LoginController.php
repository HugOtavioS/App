<?php
namespace Controllers;

use Controllers\Interfaces\ControllerInterface;
use Controllers\ViewController;
use Config\Database;
use Models\Request\Request;
use Models\Session\Session;

class LoginController implements ControllerInterface {
    private $view;
    private static Request $request;
    private $db;

    public function __construct () {

        $this->view = new ViewController();
        $this->db = new Database();

    }
    
    public function index(...$args) {

        $this->view->load("login", ["title" => "Login"]);

    }

    public function create () {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        Session::init();

        if (count($this->db->select(["*"],"users", "email = '$email' and senha = $senha")) > 0) {

            if (!Session::get("user")) {
                Session::set("user", $email);
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