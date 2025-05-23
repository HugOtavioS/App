<?php

namespace Database\Interfaces;

interface CreateInterface {
    public function create($table, array $data, $where = null);
}