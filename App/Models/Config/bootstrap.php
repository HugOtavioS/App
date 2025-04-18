<?php
use Models\Router\Router;
use Models\Router\VerifyRoutes;
use Models\Router\RouteExecute;
use Models\Router\RouterError;

define("__STYLE__", "./App/Controllers/Init/index.css");
define("__ENV__", "./.env");

$router = new Router(
    new RouterError(),
    new VerifyRoutes(
        new RouterError()
    ),
    new RouteExecute(
        new VerifyRoutes(
            new RouterError()
        )
    )
);
$router->registerRoutes();