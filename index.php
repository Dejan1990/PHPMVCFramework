<?php
require_once 'core/Application.php';

$app = new Application();

$app->router->get('/', function () {
    return 'Hello World';
});

$app->run();