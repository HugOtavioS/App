<?php
namespace Config\Database\Operations;

use Config\Database\Interfaces\SelectableInterface;
use Config\Database\Interfaces\DatabaseOperationInterface;
use Config\database;
use Exception;
use PDO;

class Select extends database implements SelectableInterface, DatabaseOperationInterface {

    private PDO $pdo;

    public function __construct() {

        $this->pdo = $this->connect();

    }

    public function execute (...$args) {

        return $this->select(...$args);

    }

    public function select (array $cols, string $table, string $cond):array {

        try {

            $query = $this->constructQuery($cols, $table, $cond);

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
    
            return $stmt->fetchAll();

        }catch (Exception $e) {

            return [];

        }
        
    }

    private function constructQuery ($cols, $table, $cond):string {

        $cols = implode(", ", $cols);

        $query = "SELECT $cols FROM $table WHERE $cond";

        return $query;

    }
    
}