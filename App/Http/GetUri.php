<?php

namespace Http;

use Http\Interfaces\GetUriInterface;
use Exceptions\Http\GetUriException;

class GetUri implements GetUriInterface {
    public function get() {
        try {
            $requestUri = $_SERVER['REQUEST_URI'];
            return $requestUri;
        } catch (\Exception $e) {
            throw new GetUriException("Erro ao obter a URI: " . $e->getMessage());
        }
    }
}
