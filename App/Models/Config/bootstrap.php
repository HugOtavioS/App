<?php
use Models\Router\Router;

define("__STYLE__", "./App/Controllers/Init/index.css");
define("__ENV__", "./.env");

$router = new Router();
$router->registerRoutes();