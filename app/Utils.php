<?php
namespace App;

/** Classe para métodos e ações gerais e uteis */
class Utils {
    /** Transforma array associativo em uma string */
    public function arrayToString (array $array, string $separador): string {

        $str = "";
        $i = 0;

        foreach ($array as $key => $value) {
            $str .= "$key = $value";
            $i ++;
            
            if ($i < count($array)) {
                $str .= "$separador ";
            }
        }

        return $str;
        
    }

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