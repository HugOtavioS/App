<?php
use App\Routes\Route;
use App\Routes\RouteException;
use App\Request;

require __DIR__."/../app/Routes/web.php";
$routeException = new RouteException();
$route = new Route($routeException);
$action = $route->verifyExistRoute(new Request);
/** 
 * O autoloading de classes realizado pelo composer me possibilita instanciar classes apenas com seu namespaces,
 * pois ele entende que está tentando chamar uma classe que não foi carregada e a carraga.
 */
$controller = new $action[0];
$controller->{$action[1]}();
