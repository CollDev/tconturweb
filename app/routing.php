<?php
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

//Routing
$app->get('/', function() use($app) {
    $response = $app['twig']->render('templates/index.html.twig');
    return new Response($response, 200, array('Cache-Control' => 's-maxage=3600, public'));
})->bind('index');

$app->get('/login', function(Request $request) use ($app) {
    if ('POST' == $request->getMethod()) {
        $username = $request->get('_username');
        $password = $request->get('_password');
        $user = new Main\Controller\UserController($app['db']);
        $encoder = $app['security.encoder_factory']->getEncoder($user);
        // compute the encoded password
        $encodedPassword = $encoder->encodePassword($password, $user->getSalt());

            var_dump($password);exit;
        // compare passwords
        if ($username === $user->username && $encodedPassword === $user->password) {
            $app['session']->set('user', array('username' => $username));
            // set security token into security
            $token = new UsernamePasswordToken($user, $password, '', array('ROLE_USER'));
            $app['security']->setToken($token);
            // redirect or give response here
            return $app->redirect('/admin');
        } else {
            // error feedback
            return $app->redirect('/login');
        }
    }

    return $app['twig']->render('templates/login.html.twig', array(
        'error' => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('login');

$app->get('/admin/logout', function(Request $request) use ($app) {
    return $app['twig']->render('templates/logout.html.twig');
})->bind('logout');

$app->get('/admin/', function () use ($app) {
    return $app['twig']->render('templates/admin.html.twig');
})->bind('admin'); 

$app->get('/nosotros', function() use($app) {
    return $app['twig']->render('templates/nosotros.html.twig');
})->bind('nosotros');//about

$app->get('/servicios', function() use($app) {
    return $app['twig']->render('templates/servicios.html.twig');
})->bind('servicios');//maintenance

$app->get('/productos', function() use($app) {
    return $app['twig']->render('templates/productos.html.twig');
})->bind('productos');//locations

$app->get('/contacto', function() use($app) {
    return $app['twig']->render('templates/contacto.html.twig');
})->bind('contacto');//price

$app->get('/clientes', function() use($app) {
    return $app['twig']->render('templates/clientes.html.twig');
})->bind('clientes');//repair
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