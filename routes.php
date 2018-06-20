<?php

$routes->get('', 'PagesController@home');
$routes->get('about', 'PagesController@about');
$routes->get('contact', 'PagesController@contact');
$routes->get('history', 'PagesController@history');
$routes->post('names', 'PagesController@addname');



