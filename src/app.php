<?php
/**
 * src/app.php
 */
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// home route
$app->get('/', function () use ($app) {
    return 'My Blog';
});

// example route from documentation
$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

$app->run();