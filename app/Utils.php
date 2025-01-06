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
}