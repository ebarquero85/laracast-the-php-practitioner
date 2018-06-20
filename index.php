<?php

ini_set('display_errors', '1');

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(
    Request::url(),
    Request::method()
);




