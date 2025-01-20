<?php
namespace App\Controllers;

@["AllowDynamicProperties"];
/**
 * Classe para carregar as views
 */
class ViewController {

    public function load (string $view, array $params = []):void {

        $this->createParams($params);

        require_once __DIR__ . "/../Views/{$view}.php";

    }

    private function createParams (array $params) {

        foreach ($params as $key => $value) {
            @$this->$key = $value;
        }
        
    }
}