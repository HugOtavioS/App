<?php

namespace Database;

use Database\Interfaces\ReadInterface;
use Database\Connect;
use Exceptions\Database\ReadException;

class Read implements ReadInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function read($table, $id = null) {
        try {
            $query = "SELECT * FROM {$table}";

            if ($id) {
                $query .= " WHERE id = :id";
            }

            $stmt = $this->db->prepare($query);

            if ($id) {
                $stmt->execute(['id' => $id]);
            } else {
                $stmt->execute();
            }

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            throw new ReadException("Erro ao ler registro: " . $e->getMessage());
        }
    }
    
}