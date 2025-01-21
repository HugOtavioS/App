<?php
use App\Routes\Router;
use App\Routes\RouteError;
use App\Utils;

use App\Routes\AddRoute;
use App\Routes\GetRoutes;
use App\Routes\HandleController;
use App\Routes\VerifyUri;
use App\Routes\VerifyProtectedRoute;
use App\Routes\VerifyVerb;
use App\Routes\RegisterRoutes;

$router = new Router(
    new RouteError,
    new Utils,
    new AddRoute(new Utils),
    new GetRoutes,
    new HandleController(new Utils, new RouteError),
    new VerifyUri(new Utils, new RouteError),
    new VerifyProtectedRoute(new RouteError),
    new VerifyVerb(new RouteError),
    new RegisterRoutes(
        new RouteError,
        new VerifyUri(new Utils, new RouteError),
        new VerifyProtectedRoute(new RouteError),
        new VerifyVerb(new RouteError),
        new HandleController(new Utils, new RouteError)),
);

require __DIR__ . "/../app/Routes/web.php";
require __DIR__ . "/Database/RegisterOperations.php";

$router->registerRoutes();