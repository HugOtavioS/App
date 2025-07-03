<?php

namespace Database;

use Database\Interfaces\DatabaseInterface;
use Database\Connect;
use Database\Create;
use Database\Read;
use Database\Update;
use Database\Delete;

class Database implements DatabaseInterface {
    private $db;
    private $connect;
    private $create;
    private $read;
    private $update;
    private $delete;

    public function __construct(Connect $connect, Create $create, Read $read, Update $update, Delete $delete) {
        $this->connect = $connect;
        $this->create = $create;
        $this->read = $read;
        $this->update = $update;
        $this->delete = $delete;
        
        $this->db = $this->connect();
    }

    public function connect() {
        return $this->connect->connect();
    }

    public function create($table, array $data, $where = null) {
        return $this->create->create($table, $data, $where);
    }

    public function read($table, ...$where) {
        return $this->read->read($table, $where);
    }

    public function update($table, $id, $data) {
        return $this->update->update($table, $id, $data);
    }

    public function delete($table, $id) {
        return $this->delete->delete($table, $id);
    }
    
}
