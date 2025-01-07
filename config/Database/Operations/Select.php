<?php
namespace Config\Database\Operations;

use Config\Database\Interfaces\SelectableInterface;
use Config\Database\Interfaces\DatabaseOperationInterface;
use Config\database;
use PDO;
use App\Utils;

class Select extends database implements SelectableInterface, DatabaseOperationInterface {
    private PDO $pdo;
    private $utils;

    public function __construct() {
        $this->utils = new Utils();
        parent::__construct();
        $this->pdo = $this->connect();
    }

    public function execute (...$args) {
        return $this->select(...$args);
    }

    public function select (array $cols, string $table, array $cond, string $operation) {
        $query = $this->constructQuery($cols, $table, $cond, $operation);
        
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    private function constructQuery ($cols, $table, $cond, $operation):string {
        $cols = implode(", ", $cols);

        $query = "SELECT $cols FROM $table WHERE ";
        $query .= $this->formatWhereConditions($cond, $operation).";";

        return $query;
    }

    private function formatWhereConditions (array $cond, string $op) {
        $i = [];

        foreach ($cond as $key => $value) {
            $i[$key] = "'$value'";
        }
        
        return $this->utils->arrayToString($i, $op);
    }
}