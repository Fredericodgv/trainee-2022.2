<?php

use App\Controllers\PostController;
use App\Core\Router;
//
$router->get('posts', 'PostController@index');
// Exemplo de Rota
// $Router->get('/home', 'HomeController@index');
//               define url, controler@funcaodentrodele

//passando dados da view para o banco de dados
$router->post('posts/create', 'PostController@create');

//passando dados para que o usuario, de acordo com sua id, possa ser deletado
$router->post('posts/delete', 'PostController@delete');

//editar o usuario, passando seus dados e id
$router->post('posts/update', 'PostController@update');

