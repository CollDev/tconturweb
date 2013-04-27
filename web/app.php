<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__ . '/../src/views/',
    'twig.class_path' => __DIR__ . '/../vendor/twig/twig/lib/'
));

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->before(function() use ($app) {
    $app['twig']->addGlobal('layout', $app['twig']->loadTemplate('layout.twig'));
});

$app->get('/', function() use($app) {
    return $app['twig']->render('templates/index.twig');
})->bind('index');

$app->get('/about', function() use($app) {
    return $app['twig']->render('templates/about.twig');
})->bind('about');

$app->get('/maintenance', function() use($app) {
    return $app['twig']->render('templates/maintenance.twig');
})->bind('maintenance');

$app->get('/locations', function() use($app) {
    return $app['twig']->render('templates/locations.twig');
})->bind('locations');

$app->get('/price', function() use($app) {
    return $app['twig']->render('templates/price.twig');
})->bind('price');

$app->get('/repair', function() use($app) {
    return $app['twig']->render('templates/repair.twig');
})->bind('repair');

$app->run();
