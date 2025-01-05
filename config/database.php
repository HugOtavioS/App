<?php
namespace Config;

use PDO;
use PDOException;
use Config\env;

class database {
    private $env;
    private $pdo;

    public function __construct() {
        $this->env = new env();
    }

    private function getenv () {
        $env = $this->env->getEnvContent();
        $arr = [];

        foreach ($env as $key => $value) {
            if(strstr($value, "DB")){
                $k = explode("=", $value)[0];
                $v = explode("=", $value)[1];

                $arr[$k] = $v;
            }
        }

        return $arr;
    }

    private function connect(): PDO|null {
        $env = $this->getenv();

        $dsn = 'mysql:dbname=' . $env['DB_NAME'] . ';host=' . $env['DB_HOST'];
        $username = $env['DB_USER'];
        $password = $env['DB_PASS'];

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

        $cols = implode(", ", $cols);

        $query = "SELECT $cols FROM $table WHERE ";
        $query .= $this->handleWhere($cond, $operation).";";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function insert (string $table, array $dados) {
        $this->connect();

        $this->arrayToString($dados, ", ");
        $placeholders = str_repeat("?,", count($dados) - 1) . "?";
        $query = "INSERT INTO $table (". implode(", ", array_keys($dados)) .") VALUES ($placeholders)";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array_values($dados));
    }

    /** Transforma array associativo em uma string */
    private function arrayToString (array $array, string $separador): string {
        $str = "";
        $i = 0;

        foreach ($array as $key => $value) {
            $str .= "$key = $value";
            $i ++;
            
            if ($i < count($array)) {
                $str .= "$separador ";
            }
        }

        return $str;
    }

    private function handleWhere (array $cond, string $op) {
        $i = [];

        foreach ($cond as $key => $value) {
            $i[$key] = "'$value'";
        }
        
        return $this->arrayToString($i, $op);
    }
}