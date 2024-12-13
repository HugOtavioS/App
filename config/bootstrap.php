<?php
use App\Routes\Route;
use App\Routes\RouteException;
use App\Request;
use App\Models\View;
use App\Controllers\Controller;

/** Inicializa cadastro das rotas */
require __DIR__."/../app/Routes/web.php";
$routeException = new RouteException();
$route = new Route($routeException);
/** Verifica rotas na lista */
$action = $route->verifyExistRoute(new Request);
/** Chama respectivo controller */
new Controller($action);