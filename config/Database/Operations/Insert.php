<?php
namespace Config\Database\Operations;

use Config\Database\Interfaces\InsertableInterface;
use PDO;
use App\Utils;

class Insert implements InsertableInterface {
    private PDO $pdo;
    private $utils;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
        $this->utils = new Utils();
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