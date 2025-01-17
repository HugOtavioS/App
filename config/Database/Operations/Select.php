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

    public function __construct(Utils $utils) {

        $this->utils = $utils;
        $this->pdo = $this->connect();

    }

    public function execute (...$args) {

        return $this->select(...$args);

    }

    public function select (array $cols, string $table, string $cond) {

        $query = $this->constructQuery($cols, $table, $cond);
        
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
        
    }

    private function constructQuery ($cols, $table, $cond):string {

        $cols = implode(", ", $cols);

        $query = "SELECT $cols FROM $table WHERE $cond";

        return $query;

    }
}