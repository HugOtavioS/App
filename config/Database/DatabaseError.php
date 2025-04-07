<?php
namespace Config\Database;

use Config\Database\Interfaces\DatabaseErrorInterface;
use Src\Controllers\ViewController;

class DatabaseError implements DatabaseErrorInterface {
    public function error(string $message): void {

        $viewController = new ViewController();
        $viewController->load("500", ["msg" => "Ocorreu um erro interno no servidor."]);
        exit;
        
    }
}