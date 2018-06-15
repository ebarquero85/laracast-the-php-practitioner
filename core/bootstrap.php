<?php

$app = [];

$app['config'] = require 'config.php';


require 'Request.php';
require 'Router.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);

