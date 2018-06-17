<?php

$routes->get('', 'controllers/index.php');
$routes->get('about', 'controllers/about.php');
$routes->get('contact', 'controllers/contact.php');
$routes->get('history', 'controllers/history.php');
$routes->post('names', 'controllers/add-name.php');



