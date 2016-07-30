<?php

require_once __DIR__.'/../vendor/autoload.php';

use ThinFramework\Component\Bootstrap\Bootstrap;

error_reporting(E_ALL);
ini_set("display_errors", 1);

$config = [
    'routing_path' => __DIR__.'/../app/routing/routing.yml',
];

$app = new Bootstrap($config);
$app();
