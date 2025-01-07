<?php
require __DIR__ . "/../app/Routes/web.php";
use App\Request;
use App\Routes\Router;

$request = new Request();
$router = new Router($request);
$router->handleRoute();

require __DIR__ . "/Database/RegisterOperations.php";