<?php

declare(strict_types=1);

use Example\App;

// disable all error reporting in production by settings values to 0 (zero)
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);
define('ABS_PATH', realpath(__DIR__ . '/..'));

define('SRC_PATH', ABS_PATH . DS . 'src');
define('APP_PATH', SRC_PATH . DS . 'example');
define('CONFIG_PATH', APP_PATH . DS . 'config');
define('CACHE_PATH', APP_PATH . DS . 'cache');

session_start();

require ABS_PATH . '/vendor/autoload.php';

// Launch the app
new App();
