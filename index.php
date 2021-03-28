<?php

use Pecee\SimpleRouter\SimpleRouter;

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

/* Load external routes file */

require_once 'routes.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

// SimpleRouter::setDefaultNamespace('\Demo\Controllers');
require_once "helpers.php";

// Start the routing
SimpleRouter::start();
