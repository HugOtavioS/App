<?php
namespace Config\Database\Operations;

use Config\Database\Interfaces\InsertableInterface;
use Config\Database\Interfaces\DatabaseOperationInterface;
use Config\database;
use PDO;
use App\Utils;

class Insert extends database implements InsertableInterface, DatabaseOperationInterface {
    private PDO $pdo;
    private $utils;

    public function __construct(Utils $utils) {

        $this->utils = $utils;
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

        $this->utils->arrayToString($dados, ", ");

        $placeholders = str_repeat("?,", count($dados) - 1) . "?";
        $query = "INSERT INTO $table (". implode(", ", array_keys($dados)) .") VALUES ($placeholders)";

        return $query;
        
    }
}