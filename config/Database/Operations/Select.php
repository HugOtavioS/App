<?php
namespace Config\Database\Operations;

use Config\Database\Interfaces\SelectableInterface;
use PDO;
use App\Utils;

class Select implements SelectableInterface {
    private PDO $pdo;
    private $utils;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
        $this->utils = new Utils();
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