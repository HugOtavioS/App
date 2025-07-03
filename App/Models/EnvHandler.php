<?php

namespace Models;

class EnvHandler {
    private $env;

    public function __construct() {
        try {
            $this->env = file_get_contents(ENV_PATH);
            $this->handleEnv();
        } catch (\Exception $e) {

        }
    }

    public function getEnv() {
        try {
            return $this->env;
        } catch (\Exception $e) {
            return false;
        }
    }

    private function handleEnv () {
        try {
            $env = $this->getEnv();
            $env = explode("\n", $env);
            foreach ($env as $line) {
                $line = explode("=", $line);
                $_ENV[$line[0]] = $line[1];
            }
        } catch (\Exception $e) {
            return false;
        }
    }
    
}