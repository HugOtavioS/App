<?php
namespace Config;

class env {
    private $env;
    public function __construct() {
        $this->env = "../.env";
        // echo "<pre>";
        // print_r($this->getEnvContent());
        // echo "</pre>";
        
    }

    public function getEnvContent() {
        $env = file_get_contents($this->env);
        $env = explode("\n", $env);
        $env = array_filter($env);
        return $env;
    }
}