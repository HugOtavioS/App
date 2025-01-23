<?php
namespace Config;

class env {
    
    private $env;
    public function __construct() {
        $this->env = "../.env";
    }

    public function getEnvContent():array|bool {
        $env = file_get_contents($this->env);
        $env = explode("\n", $env);
        $env = array_filter($env);
        return $env;
    }

    public function getenvDB ():array {
        $env = $this->getEnvContent();
        $arr = [];

        foreach ($env as $key => $value) {
            if(strstr($value, "DB")){
                $k = explode("=", $value)[0];
                $v = trim(explode("=", $value)[1]);

                $arr[$k] = $v;
            }
        }

        return $arr;
    }

}