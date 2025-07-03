<?php

namespace Database;

use Database\Interfaces\ConnectInterface;

class Connect implements ConnectInterface {
    private $host;
    private $username;
    private $password;
    private $database;
    private $env;
    private $db;

    public function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->database = $_ENV['DB_DATABASE'];
    }

    public function connect() {
        try {
            $this->db = new \PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->db;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function disconnect() {
        
    }
}

