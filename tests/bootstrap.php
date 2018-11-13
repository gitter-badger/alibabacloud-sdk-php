<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if (!ini_get('date.timezone')) {
	date_default_timezone_set('GMT');
}

$loader = require dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$loader->add('AlibabaCloud\\Test\\', __DIR__);
