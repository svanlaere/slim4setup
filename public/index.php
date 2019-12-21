<?php

declare(strict_types=1);

use Example\App;

// disable error reporting in production
error_reporting(0);
ini_set('display_errors', '0');

// set app default settings
ini_set('default_charset', 'UTF-8');
date_default_timezone_set('Europe/Amsterdam');
setlocale(LC_ALL, 'nl_NL');

// define app paths
define('DS', DIRECTORY_SEPARATOR);
define('ABS_PATH', realpath(__DIR__ . '/..'));

define('SRC_PATH', ABS_PATH . DS . 'src');
define('APP_PATH', SRC_PATH . DS . 'example');
define('CONFIG_PATH', APP_PATH . DS . 'config');
define('CACHE_PATH', APP_PATH . DS . 'cache');

// set to true to start route caching
// if you add or change any routes you need to delete the routes.cache file
define('ENABLE_ROUTE_CACHING', false);

session_start();

require ABS_PATH . '/vendor/autoload.php';

// Launch the app
new App();
