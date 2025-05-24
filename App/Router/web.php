<?php

use Router\Router;

Router::addRoute('GET', '/', function () {
    echo 'Hello World | GET "/"';
});

Router::addRoute('POST', '/', function() {
    echo 'Hello World | POST "/"';
});

Router::addFreeRoute('GET', '/free');

Router::addProtectedRoute('GET', '/protected', function() {
    echo 'Hello Protected';
});

Router::addAdminRoute('GET', '/admin', function() {
    echo 'Hello Admin';
});