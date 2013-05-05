<?php

use Silex\Provider\TwigServiceProvider as Twig;
use Silex\Provider\ServiceControllerServiceProvider as Controller;
use Silex\Provider\UrlGeneratorServiceProvider as Url;
use Silex\Provider\HttpCacheServiceProvider as Cache;
use Main\Entity\Entry;
use Main\Controller\EntryController;
use Silex\Provider\DoctrineServiceProvider as Doctrine;
use Silex\Provider\SecurityServiceProvider as Security;
use Silex\Provider\SessionServiceProvider as Session;

$app['debug'] = true;
$app['locale'] = 'es';

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

$app['entity.entry'] = $app->share(function() {
    return new Entry();
});

$app['entry.controller'] = $app->share(function() use ($app) {
    return new EntryController($app['entity.entry']);
});

$app->get('/getEntries', "entry.controller:getEntriesAction");
//end Controller

//Doctrine
$app->register(new Doctrine(), array(
    'db.options' => array(
        'mysql_read' => array(
            'driver'    => 'pdo_mysql',
            'host'      => 'localhost',
            'dbname'    => 'tcontur',//royalhoster_tcon
            'user'      => 'root',//royalhoster_tcon
            'password'  => 'decenio97',//wasp513
            'charset'   => 'utf8',
        ),
    ),
));
//end Doctrine

//Security
$app->register(new Security(), array(
    'security.firewalls' => array(
        'login' => array('pattern' => '^/login'), // Example of an url available as anonymous user
        'default' => array(
            'pattern' => '^.*$',
            'anonymous' => true, // Needed as the login path is under the secured area
            'form' => array('login_path' => '/login', 'check_path' => '/login_check'),
            'logout' => array('logout_path' => '/logout'), // url to call for logging out
            'users' => $app->share(function() use ($app) {
                // Specific class App\User\UserProvider is described below
                return new Main\Controller\UserController($app['db']);
            }),
        ),
    ),
    'security.access_rules' => array(
        // You can rename ROLE_USER as you wish
        array('^/admin.+$', 'ROLE_USER')
    )
));
//end Security

//Session
$app->register(new Session());
//end Session

//Routing
$app->register(new Url());
//end Routing