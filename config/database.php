<?php
namespace Config;

use PDO;
use PDOException;
use Config\env;
use App\Utils;

/** Manipular e Lidar com o banco de dados */
class database {
    private $env;
    private $pdo;
    private $utils;

    public function __construct() {
        $this->env = new env();
        $this->env = $this->env->getenvDB();
        $this->utils = new Utils();
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

    public function selectWhere (array $cols, string $table, array $cond, string $operation) {
        $this->connect();

        $query = $this->constructQuerySelectWhere($cols, $table, $cond, $operation);

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    private function constructQuerySelectWhere ($cols, $table, $cond, $operation):string {
        $cols = implode(", ", $cols);

        $query = "SELECT $cols FROM $table WHERE ";
        $query .= $this->handleCondiction($cond, $operation).";";

        return $query;
    }

    public function insert (string $table, array $dados) {
        $this->connect();

        $query = $this->constructQueryInsert($table, $dados);

        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array_values($dados));
    }

    private function constructQueryInsert ($table, $dados):string {
        $this->utils->arrayToString($dados, ", ");

        $placeholders = str_repeat("?,", count($dados) - 1) . "?";
        $query = "INSERT INTO $table (". implode(", ", array_keys($dados)) .") VALUES ($placeholders)";

        return $query;
    }

    private function handleCondiction (array $cond, string $op) {
        $i = [];

        foreach ($cond as $key => $value) {
            $i[$key] = "'$value'";
        }
        
        return $this->utils->arrayToString($i, $op);
    }
}