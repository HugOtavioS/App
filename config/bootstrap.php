<?php
use App\Controllers\ViewController;
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
    new RouteError(new ViewController),
    new Utils,
    new AddRoute(new Utils),
    new GetRoutes,
    new HandleController(new Utils, new RouteError(new ViewController)),
    new VerifyUri(new Utils, new RouteError(new ViewController)),
    new VerifyProtectedRoute(new RouteError(new ViewController)),
    new VerifyVerb(new RouteError(new ViewController)),
    new RegisterRoutes(
        new RouteError(new ViewController),
        new VerifyUri(new Utils, new RouteError(new ViewController)),
        new VerifyProtectedRoute(new RouteError(new ViewController)),
        new VerifyVerb(new RouteError(new ViewController)),
        new HandleController(new Utils, new RouteError(new ViewController))),
);

require __DIR__ . "/../app/Routes/web.php";
require __DIR__ . "/Database/RegisterOperations.php";

$router->registerRoutes();