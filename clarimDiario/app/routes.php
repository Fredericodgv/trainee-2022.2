<?php

use App\Controllers\PostController;
use App\Core\Router;
//
$router->get('admin/posts', 'PostController@index');
// Exemplo de Rota
// $Router->get('/home', 'HomeController@index');
//               define url, controler@funcaodentrodele

//passando dados da view para o banco de dados
$router->post('admin/posts/create', 'PostController@create');

//passando dados para que o usuario, de acordo com sua id, possa ser deletado
$router->post('admin/posts/delete', 'PostController@delete');

//editar o usuario, passando seus dados e id
$router->post('admin/posts/update', 'PostController@update');

$router->post('admin/posts', 'PostController@index');

