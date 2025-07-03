<?php

namespace App\Controllers;

use Exception;
use Models\ViewLoader;
use Database\Database;
use Database\Connect;
use Database\Create;
use Database\Read;
use Database\Update;
use Database\Delete;

class RegisterController {

    private $db;

    public function __construct() {
        $this->db = new Database(new Connect(), new Create(), new Read(), new Update(), new Delete());
    }

    public function index() {
        try {

            if (isset($_POST["email"]) and isset($_POST["password"])) {
                $name = isset($_POST["name"]) ? $_POST["name"] : "";
                $email = isset($_POST["email"]) ? $_POST["email"] : "";
                $password = isset($_POST["password"]) ? $_POST["password"] : "";

                $res = $this->db->read("user", ["nome", "=", $name], ["email", "=", $email]);
        
                if ($res === "false") {
                    $this->db->create("users", ["nome" => $name, "email" => $email, "pass" => $password]);
                    
                    header($_SERVER["SERVER_PROTOCOL"] . " 200 Content-Type: application/json");
                    echo json_encode(["true"]);
                }
            }

        } catch (Exception $e) {
            header($_SERVER["SERVER_PROTOCOL"] . " 200 Content-Type: application/json");
            echo json_encode(["false"]);
        } finally {

        }

    }

}