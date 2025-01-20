<?php
namespace App;

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
}