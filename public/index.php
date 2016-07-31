<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThinFramework\Component\Bootstrap\Bootstrap;
use ThinFramework\Component\Request\Request;

$config = [
    'routing_path'      => __DIR__.'/../app/routing/routing.yml',
    // 'templating_path'   => __DIR__.'/../src/View/smarty',
    // 'templating_engine' => 'Smarty',
    'templating_path'   => __DIR__.'/../src/View/twig',
    'templating_engine' => 'Twig',
    'services_path'     => __DIR__.'/../app/services/services_prod.yml',
];

$app     = new Bootstrap($config);
$request = new Request();
$app($request);
