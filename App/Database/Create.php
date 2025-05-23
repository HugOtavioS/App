<?php

namespace Database;

use Database\Interfaces\CreateInterface;
use Database\Connect;
use Exceptions\Database\CreateException;

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

            if ($stmt->rowCount() > 0) {
                return [
                    'success' => true,
                    'message' => 'Registro inserido com sucesso'
                ];
            }
            throw new CreateException("Erro ao inserir registro: " . $stmt->errorInfo()[2]);
        } catch (\PDOException $e) {
            throw new CreateException("Erro ao inserir registro: " . $stmt->errorInfo()[2]);
        }
    }
}