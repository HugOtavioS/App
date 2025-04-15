<?php
use Models\Router\Router;

define("__STYLE__", "../Controllers/Init/index.css");

$router = new Router();
$router->registerRoutes();