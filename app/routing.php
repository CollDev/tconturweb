<?php
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

//Routing
$app->get('/', function() use($app) {
    $response = $app['twig']->render('templates/index.html.twig');
    return new Response($response, 200, array('Cache-Control' => 's-maxage=3600, public'));
})->bind('index');

$app->get('/login', function(Request $request) use ($app) {
//    if ('POST' == $request->getMethod()) {
//        $username = $request->get('_username');
//        $password = $request->get('_password');
//        $user = new Main\Controller\UserController($app['db']);
//        $encoder = $app['security.encoder_factory']->getEncoder($user);
//        // compute the encoded password
//        $encodedPassword = $encoder->encodePassword($password, $user->getSalt());
//
//            var_dump($password);exit;
//        // compare passwords
//        if ($user->password == $encodedPassword) {
//            // set security token into security
//            $token = new UsernamePasswordToken($user, $password, '', array('ROLE_USER'));
//            $app['security']->setToken($token);
//            //return $app->redirect('/jander');
//            // redirect or give response here
//            return $app->redirect('/admin');
//        } else {
//        // error feedback
//        }
//    }

    return $app['twig']->render('templates/login.html.twig', array(
        'error' => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('login');

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

if (!$app['debug']) {
    $app->error(function (\Exception $e, $code) use ($app) {
        if ($code == 404) {
            $response = $app['twig']->render('templates/404.html.twig');
            return new Response($response, 404);
        } else {
            $response = $app['twig']->render('templates/error.html.twig', array('code' => $code));
            return new Response($response, $code);
        }
    });
}