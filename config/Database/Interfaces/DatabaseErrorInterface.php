<?php
namespace Config\Database\Interfaces;

interface DatabaseErrorInterface {
    public function error(string $message): void;
}