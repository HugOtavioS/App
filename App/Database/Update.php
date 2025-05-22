<?php

namespace Database;

use Database\Interfaces\UpdateInterface;
use Database\Connect;

class Update implements UpdateInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function update($table, $id, $data) {
        $query = "UPDATE {$table} SET ";

        foreach ($data as $key => $value) {
            $query .= "{$key} = :{$key}, ";
        }
        
        $query = substr($query, 0, -2);
        $query .= " WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
        return $stmt->rowCount();
    }
}