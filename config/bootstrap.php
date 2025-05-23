<?php

require_once __DIR__ . '/../App/Router/web.php';
const VIEWS_PATH = __DIR__ . '/../App/Views/';
const ENV_PATH = __DIR__ . '/../.env';

use Http\Request;
use Http\GetMethod;
use Http\GetUri;

use Router\Router;
use Models\EnvHandler;

$env = new EnvHandler();
$router = new Router(new Request(new GetMethod(), new GetUri()));
$router->run();