<?php
require __DIR__ . "/../app/Routes/web.php";
require __DIR__ . "/Database/RegisterOperations.php";

use App\Request;
use App\Routes\Router;
use App\Routes\RouteError;
use App\Session;
use App\Utils;

$router = new Router(new RouteError, new Utils);
$router->registerRoutes();