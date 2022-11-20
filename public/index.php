<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use wfm\App;

if (PHP_MAJOR_VERSION < 8) {
    die('НЕОБХОДИМО ОБНОВИТЬ ВЕРСИЮ PHP');
}

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new wfm\App();
// var_dump(wfm\Router::getRoutes());
var_dump($_SERVER['REQUEST_URI']);
?>
<!-- <link rel="stylesheet" href="style.css?v=2" /> -->