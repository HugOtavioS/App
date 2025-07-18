<?php

namespace Database;

use Database\Interfaces\DeleteInterface;
use Database\Connect;
use Exceptions\Database\DeleteException;

class Delete implements DeleteInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function delete($table, $id) {
        try {
            $query = "DELETE FROM {$table} WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->execute(['id' => $id]);
            return $stmt->rowCount();
        } catch (\PDOException $e) {
            throw new DeleteException("Erro ao deletar registro: " . $e->getMessage());
        }
    }
}
