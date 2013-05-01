<?php

use Silex\Provider\TwigServiceProvider as Twig;
use Silex\Provider\ServiceControllerServiceProvider as Controller;
use Silex\Provider\UrlGeneratorServiceProvider as Url;
use Silex\Provider\HttpCacheServiceProvider as Cache;
use Main\Entity\Entry;
use Main\Controller\EntryController;
use Silex\Provider\DoctrineServiceProvider as Doctrine;

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

//Routing
$app->register(new Url());

//Controller
$app->register(new Controller());

$app['entity.entry'] = $app->share(function() {
    return new Entry();
});

$app->get('/getEntries', function() use ($app) {
    return $app['entity.entry']->findAll();
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
            'dbname'    => 'royalhoster_tcon',//royalhoster_tcon
            'user'      => 'royalhoster_tcon',//royalhoster_tcon
            'password'  => 'wasp513',//wasp513
            'charset'   => 'utf8',
        ),
    ),
));
//end Doctrine