<?php
namespace Config\Database\Interfaces;

interface SelectableInterface {
    public function select(array $cols, string $table, string $cond);
}