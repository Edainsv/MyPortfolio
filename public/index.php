<?php

define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/vendor/autoload.php';
require APP_PATH . '/app/Helpers/helpers.php';

use App\Router;

$router = new Router();

$GLOBALS['router'] = $router;

require APP_PATH . '/routes/web.php';

$router->dispatch();