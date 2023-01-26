<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * include
 */
require_once __DIR__ . '/config/connection.php';
require_once 'vendor/autoload.php';

use Core\Router;

$routes = require_once __DIR__ . '/config/routes.php';

$track = (new Router())->handleRequest($routes);