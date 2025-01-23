<?php
namespace Config\Database\Operations;

use Config\Database\Interfaces\InsertableInterface;
use Config\Database\Interfaces\DatabaseOperationInterface;
use Config\Database\database;
use PDO;

class Insert extends database implements InsertableInterface, DatabaseOperationInterface {
    
    private PDO $pdo;

    public function __construct() {

        $this->pdo = $this->connect();

    }

    public function execute (...$args) {

        return $this->insert(...$args);

    }

    public function insert (string $table, array $dados) {

        $query = $this->constructQuery($table, $dados);

        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array_values($dados));

    }

    private function constructQuery ($table, $dados):string {

        $placeholders = str_repeat("?,", count($dados) - 1) . "?";
        $query = "INSERT INTO $table (". implode(", ", array_keys($dados)) .") VALUES ($placeholders)";

        return $query;
        
    }

}