<?php

namespace Models;

class EnvHandler {
    private $env;

    public function __construct() {
        $this->env = file_get_contents(ENV_PATH);
        $this->handleEnv();
    }

    public function getEnv() {
        return $this->env;
    }

    private function handleEnv () {
        $env = $this->getEnv();
        $env = explode("\n", $env);
        
        foreach ($env as $line) {
            $line = explode("=", $line);
            $_ENV[$line[0]] = $line[1];
        }
    }
    
}