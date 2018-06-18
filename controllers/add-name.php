<?php


$app['database']->insert('users',[
    'name' => $_POST['name'],
    //'email' => $_POST['email'],
]);

//var_dump($_REQUEST);
header('Location: /');