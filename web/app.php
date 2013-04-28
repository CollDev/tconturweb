<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application as App;
use Silex\Provider\TwigServiceProvider as Twig;
use Silex\Provider\ServiceControllerServiceProvider as Controller;
use Silex\Provider\UrlGeneratorServiceProvider as Url;
use Silex\Provider\HttpCacheServiceProvider as Cache;
use Symfony\Component\HttpFoundation\Response;

$app = new App();
$app['debug'] = false;

//Cache
$app->register(new Cache(), array(
    'http_cache.cache_dir' => __DIR__ . '/../app/cache/',
));
//end Cache

//Twig
$app->register(new Twig(), array(
    'twig.path'       => __DIR__ . '/../src/Main/Resources/views/',
    'twig.class_path' => __DIR__ . '/../vendor/twig/twig/lib/'
));
//end Twig

//Controller
$app->register(new Controller());
//end Controller

//Routing
$app->register(new Url());

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

$app->error(function (\Exception $e, $code) use ($app) {
    if ($code == 404) {
        $response = $app['twig']->render('templates/404.html.twig');
        return new Response($response, 404);
    } else {
        $response = $app['twig']->render('templates/error.html.twig', array('code' => $code));
        return new Response($response, $code);
    }
});

if ($app['debug']) {
    $app->run();
} else {
 $app['http_cache']->run();
}