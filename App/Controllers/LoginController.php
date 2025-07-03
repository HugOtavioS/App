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

class LoginController {

    private $db;

    public function __construct() {
        $this->db = new Database(new Connect(), new Create(), new Read(), new Update(), new Delete());
    }

    public function index() {        
        try {

            if (isset($_POST["email"]) and isset($_POST["password"])) {
                $email = isset($_POST["email"]) ? $_POST["email"] : "";
                $password = isset($_POST["password"]) ? $_POST["password"] : "";

                $res = $this->db->read("users", ["email", "=", $email], ["pass", "=", $password]);

                if (!$res) {
                    throw new Exception();
                }

                header($_SERVER["SERVER_PROTOCOL"] . " 200 Content-Type: application/json");
                echo json_encode(["true"]);
            }

        } catch (Exception $e) {
            header($_SERVER["SERVER_PROTOCOL"] . " 200 Content-Type: application/json");
            echo json_encode(["false"]);
        } finally {

        }

    }

}