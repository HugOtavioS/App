<?php

namespace Database;

use Database\Interfaces\ReadInterface;
use Database\Connect;

class Read implements ReadInterface {
    private $db;

    public function __construct() {
        $this->db = (new Connect())->connect();
    }

    public function read($table, ...$where) {
        try {
            $query = "SELECT * FROM {$table}";

            if ($where) {
                $execute = [];
                $query .= " WHERE";

                foreach ($where[0] as $key => $value) {
                    $x = $value[0];
                    $y = $value[1];
                    $z = $value[2];

                    $execute[$x] = $z;
                    $query .= " $x $y :$x";

                    if ($key < count($where[0]) - 1) {
                        $query .= " AND";
                    }
                }
            }

            $stmt = $this->db->prepare($query);

            if ($where) {
                $stmt->execute($execute);
            } else {
                $stmt->execute();
            }
            
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            return false;
        }
    }
    
}