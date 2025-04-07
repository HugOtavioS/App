<?php
use Src\Controllers\ViewController;
use Src\Route\Classes\Router;
use Src\Route\Classes\RouteError;
use Src\Utils;

use Src\Request\Request;
use Src\Request\Classes\GetUri;
use Src\Request\Classes\GetVerb;
use Src\Request\Classes\Redirect;

use Src\Route\Classes\AddRoute;
use Src\Route\Classes\GetRoutes;
use Src\Route\Classes\HandleController;
use Src\Route\Classes\VerifyUri;
use Src\Route\Classes\VerifyProtectedRoute;
use Src\Route\Classes\VerifyVerb;
use Src\Route\Classes\VerifyRoute;
use Src\Route\Classes\RegisterRoutes;

$rq = new Request(new GetUri(), new GetVerb(), new Redirect());

$router = new Router(
    new RouteError(new ViewController),
    new Utils,
    new AddRoute(new Utils),
    new GetRoutes,
    new HandleController(new Utils, new RouteError(new ViewController)),
    new VerifyUri(new Utils, new RouteError(new ViewController)),
    new VerifyProtectedRoute(new RouteError(new ViewController)),
    new VerifyVerb(new RouteError(new ViewController)),
    new VerifyRoute(new Utils),
    new RegisterRoutes(
        new RouteError(new ViewController),
        new VerifyUri(new Utils, new RouteError(new ViewController)),
        new VerifyProtectedRoute(new RouteError(new ViewController)),
        new VerifyVerb(new RouteError(new ViewController)),
        new HandleController(new Utils, new RouteError(new ViewController))),
);

require __DIR__ . "/../src/Route/web.php";
require __DIR__ . "/Database/RegisterOperations.php";

$router->registerRoutes();