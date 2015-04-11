<?php
/**
 * src/app.php
 */
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

// register Twig Service Provider
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/views',
));

// home route
$app->get('/', function () use ($app) {
    return 'My Blog';
});

// example route from documentation
$app->get('/hello/{name}', function ($name) use ($app) {
    return $app['twig']->render('hello.twig', array(
        'name' => $name,
    ));

});

$app->run();