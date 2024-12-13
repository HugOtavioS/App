<?php
namespace App\Controllers;

use App\Models\View;

/** Lidar com a chamada de um controller */
class Controller {
    public function __construct($action)
    {
        /** 
         * O autoloading de classes realizado pelo composer me possibilita instanciar classes apenas com seu namespaces,
         * pois ele entende que está tentando chamar uma classe que não foi carregada e a carraga.
         */
        $controller = new $action[0](new View);
        $controller->{$action[1]}();
    }
}