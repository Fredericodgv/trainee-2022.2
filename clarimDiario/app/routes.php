<?php

use App\Core\Router;

$router->get('lista_de_usuarios', 'UserController@index');

$router->get('admin/show', 'UserController@show');

$router->post('admin/create', 'UserController@create');

$router->post('admin/edit', 'UserController@edit');

$router->post('admin/delete', 'UserController@delete');

$router->get('login', 'LoginController@index');
