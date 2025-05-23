<?php

namespace Database;

use Database\Interfaces\UpdateInterface;
use Database\Connect;
use Exceptions\Database\UpdateException;

class Update implements UpdateInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function update($table, $id, $data) {
        try {
            $query = "UPDATE {$table} SET ";

            foreach ($data as $key => $value) {
                $query .= "{$key} = :{$key}, ";
            }
        
            $query = substr($query, 0, -2);
            $query .= " WHERE id = $id";
            $stmt = $this->db->prepare($query);
            $stmt->execute($data);
            return $stmt->rowCount();
        } catch (\PDOException $e) {
            throw new UpdateException("Erro ao atualizar registro: " . $e->getMessage());
        }
    }
}