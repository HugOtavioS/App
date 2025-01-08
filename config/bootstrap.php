<?php
require __DIR__ . "/../app/Routes/web.php";
use App\Request;
use App\Routes\Router;
use App\Routes\RouteError;

$router = new Router(new Request, new RouteError);
$router->registerRoutes();

require __DIR__ . "/Database/RegisterOperations.php";