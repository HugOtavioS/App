<?php

namespace Database;

use Database\Interfaces\DeleteInterface;
use Database\Connect;

class Delete implements DeleteInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function delete($table, $id) {
        $query = "DELETE FROM {$table} WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }
}
