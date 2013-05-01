<?php
use Symfony\Component\HttpFoundation\Response;

//Routing
$app->get('/', function() use($app) {
    $response = $app['twig']->render('templates/index.html.twig');
    return new Response($response, 200, array('Cache-Control' => 's-maxage=3600, public'));
})->bind('index');

$app->get('/about', function() use($app) {
    return $app['twig']->render('templates/about.html.twig');
})->bind('about');

$app->get('/maintenance', function() use($app) {
    return $app['twig']->render('templates/maintenance.html.twig');
})->bind('maintenance');

$app->get('/locations', function() use($app) {
    return $app['twig']->render('templates/locations.html.twig');
})->bind('locations');

$app->get('/price', function() use($app) {
    return $app['twig']->render('templates/price.html.twig');
})->bind('price');

$app->get('/repair', function() use($app) {
    return $app['twig']->render('templates/repair.html.twig');
})->bind('repair');
//end Routing