<?php
use App\routes\router;
use App\controllers\HomeController;

Router::addRoute("/", HomeController::class, "index");
Router::addRoute("/contato", HomeController::class, "index");
Router::addRoute("/produtos", HomeController::class,"index");