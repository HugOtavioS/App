<?php

namespace Database\Interfaces;

interface UpdateInterface {
    public function update($table, $id, $data);
}