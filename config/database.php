<?php
namespace Config;

use PDO;
use PDOException;
use Config\env;
use App\Utils;
use Config\Database\Operations\Select;
use Config\Database\Operations\Insert;

/** Manipular e Lidar com o banco de dados */
class database {
    private $env;
    private $pdo;
    private $utils;
    private Select $select;
    private Insert $insert;

    public function __construct() {
        $this->env = new env();
        $this->env = $this->env->getenvDB();
        $this->utils = new Utils();

        $this->connect();

        $this->select = new Select($this->pdo);
        $this->insert = new Insert($this->pdo);
    }

    private function connect(): PDO|null {
        $dsn = 'mysql:dbname=' . $this->env['DB_NAME'] . ';host=' . $this->env['DB_HOST'];
        $username = $this->env['DB_USER'];
        $password = $this->env['DB_PASS'];

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }
    }

    public function select (array $cols, string $table, array $cond, string $operation) {
        return $this->select->select($cols, $table, $cond, $operation);
    }

    public function insert (string $table, array $dados) {
        return $this->insert->insert($table, $dados);
    }
}