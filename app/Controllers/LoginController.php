<?php
namespace App\Controllers;

use App\Controllers\ViewController;
use Config\database;
use Config\env;
use App\Request;
use App\Session;

class LoginController {
    private $view;
    private $db;
    private $request;
    private $session;

    public function __construct () {

        $this->view = new ViewController();
        $this->db = new database(new env);
        $this->request = new Request();

    }
    public function index() {

        $this->view->load("login", ["title" => "Login"]);

    }

    public function create () {

        $email = $_POST["email"];
        $senha = $_POST["senha"];
        Session::init();
        if (count($this->db->select(["*"],"users", ["email" => $email, "senha" => $senha], "AND")) > 0) {

            if (!Session::get("session_login")) {
                Session::set("session_login", "$email");
            }

            Request::redirect("/");

        } else {

            $this->request->redirect("http:\\login?error=0");

        }

    }

    public function logout () {
        Session::delete("session_login");
        Session::destroy();
        $this->request->redirect("/");
    }
}