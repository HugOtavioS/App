<?php
namespace App\Controllers;

use AllowDynamicProperties;

@["AllowDynamicProperties"];
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