<?php
require_once '../vendor/autoload.php';

define('_VIEW_PATH', dirname(__DIR__). '/src/views');
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

use Pecee\SimpleRouter\SimpleRouter as Route;

Route::setDefaultNamespace('App\Controllers');

// Start the routing
Route::start();