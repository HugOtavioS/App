<?php
namespace Src;

/**
 * Classe para métodos e ações gerais e uteis
 */
class Utils {

    // Verifica se um valor existe em um array em uma chave especifica
    public function array_value_exists (array $arr, string $value, string $key):bool {

        $i = [];

        foreach ($arr as $ch => $valor) {

            if ($ch == $key and $valor == $value) {
                $i[] = $arr;
            }

        }

        if (count($i) <= 0) {

            return false;
            
        }
        
        return true;
        
    }

    public function separator (string $value, int $key, string $separator):string {

        return explode($separator, $value)[$key];
        
    }

    public function verifyController ($controller, $exception):mixed {

        if (!class_exists($controller)) {

            $exception->controllerNotFound();

        }

        return $controller;

    }

    public function verifyAction ($controllerInstance, $action, $exception): mixed {

        if (!method_exists($controllerInstance, $action)) {

            $exception->actionNotFound();
            
        }

        return $action;
        
    }
}