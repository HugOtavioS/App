<?php
namespace App\Models;

use AllowDynamicProperties;

/** Classe para a renderização da View */
#[AllowDynamicProperties]
class View {
    public function render (string $view, array $params=[])
    {
        if (count($params) > 0)
        {
            $this->createParams($params);
        }

        include __DIR__."/../Views/$view.php";
    }

    /** Cria os parâmetros dinamicamente */
    private function createParams (array $params)
    {
        foreach ($params as $key => $value) {
            $this->$key = $value;
        }
    }
}