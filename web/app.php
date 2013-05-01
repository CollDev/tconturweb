<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Silex\Application;
$app = new Application();

require_once __DIR__ . '/../app/bootstrap.php';
require_once __DIR__ . '/../app/routing.php';

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