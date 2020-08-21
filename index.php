<?php
session_start();

use app\core\Router;
use app\lib\Db;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require_once $path;
    }
});

$router = new Router;
$router->run();
