<?php

ini_set('display_errors', '1');

$database = require 'core/bootstrap.php';


require Router::load('routes.php')->direct(Request::url());


