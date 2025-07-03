<?php

namespace Database\Interfaces;

interface DatabaseInterface {
    public function connect();
    public function create($table, array $data, $where = null);
    public function read($table, ...$where);
    public function update($table, $id, $data);
    public function delete($table, $id);
}