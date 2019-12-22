<?php

declare(strict_types=1);

use Example\App;

// disable error reporting in production
define('DEBUG', true);

// set to true to start route caching
// if you add or change any routes you need to delete the routes.cache file
define('ENABLE_ROUTE_CACHING', false);

// set app default settings
ini_set('default_charset', 'UTF-8');
date_default_timezone_set('Europe/Amsterdam');
setlocale(LC_ALL, 'nl_NL');

define('DS', DIRECTORY_SEPARATOR);
define('ABS_PATH', realpath(__DIR__ . '/..'));

// define app paths
define('SRC_PATH', ABS_PATH . DS . 'src');
define('APP_PATH', SRC_PATH . DS . 'example');
define('CONFIG_PATH', APP_PATH . DS . 'config');
define('CACHE_PATH', APP_PATH . DS . 'cache');
define('DEBUG_PATH', APP_PATH . DS . 'debug');

if (defined('DEBUG')) {
    ini_set('error_log', DEBUG_PATH . DS . 'error.log');
    if (DEBUG === true) {
        error_reporting(E_ALL | E_STRICT);
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        ini_set('html_errors', '1');
    } else if (DEBUG === false) {
        error_reporting(0);
        ini_set('display_errors', '0');
        ini_set('display_startup_errors', '0');
    }
}

session_start();

require ABS_PATH . '/vendor/autoload.php';

// Launch the app
new App();
