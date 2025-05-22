<?php

namespace Database;

use Database\Interfaces\CreateInterface;
use Database\Database;
use Database\Connect;

class Create implements CreateInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function create($table, array $data, $where = null) {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
            
            $query = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";

            if ($where) {
                $query .= " WHERE {$where}";
            }

            $stmt = $this->db->prepare($query);

            $stmt->execute($data);

            throw new \PDOException("Erro ao inserir registro: " . $stmt->errorInfo()[2]);
        } catch (\PDOException $e) {
            return [
                'success' => false,
                'message' => 'Erro ao inserir registro: ' . $e->getMessage()
            ];
        }
    }
}