<?php
namespace Config\Database\Interfaces;

interface InsertableInterface {
    public function insert (string $table, array $dados);
}