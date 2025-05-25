<?php

use Router\Router;
use Models\ViewLoader;

Router::addRoute('GET', '/', function () {
    // echo 'Hello World | GET "/"';
    $view = new ViewLoader();
    $view->load("home");
});

Router::addRoute('POST', '/', function() {
    echo 'Hello World | POST "/"';
});

Router::addProtectedRoute('GET', '/protected', function() {
    echo 'Hello Protected';
});

Router::addAdminRoute('GET', '/admin', function() {
    echo 'Hello Admin';
});