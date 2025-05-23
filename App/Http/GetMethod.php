<?php

namespace Http;

use Http\Interfaces\GetMethodInterface;
use Exceptions\Http\GetMethodException;
class GetMethod implements GetMethodInterface {
    public function get() {
        try {
            $requestMethod = $_SERVER['REQUEST_METHOD'];
            return $requestMethod;
        } catch (\Exception $e) {
            throw new GetMethodException("Erro ao obter o método da requisição: " . $e->getMessage());
        }
    }
}