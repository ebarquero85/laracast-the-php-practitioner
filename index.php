<?php
ini_set('display_errors', '1');

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('routes.php')->direct(
    Request::url(),
    Request::method()
);




