<?php

use App\Core\Router;

$router->get('users', 'UserController@index');
$router->get('posts', 'PostController@index');

