<?php
ini_set('display_errors', '1');

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

require Router::load('routes.php')->direct(
    Request::url(),
    Request::method()
);




