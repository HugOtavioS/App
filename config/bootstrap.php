<?php
require __DIR__ . "/../app/routes/web.php";
use App\Request;
use App\routes\router;

$request = new Request();
$router = new Router($request);
$router->verifyRoute();