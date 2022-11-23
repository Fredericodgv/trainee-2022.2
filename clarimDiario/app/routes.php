<?php

use App\Core\Router;

// Exemplo de Rota
// $Router->get('/home', 'HomeController@index');
// $Router->get('/posts', 'PostController@index');

$router->get('lista_de_usuarios', 'UserController@index');

$router->post('admin/create', 'UserController@create');

$router->post('admin/edit', 'UserController@edit');

$router->post('admin/delete', 'UserController@delete');

