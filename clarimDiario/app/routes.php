<?php

use App\Core\Router;

//rotas gerais

$router->get('landing_page', 'HomeController@landingPage');

$router->get('post_individual', 'HomeController@postIndividual');

$router->get('lista_de_posts','HomeController@listaPosts');

//Rotas de usuarios

$router->get('lista_de_usuarios', 'UserController@index');

$router->get('admin/show', 'UserController@show');

$router->post('admin/create', 'UserController@create');

$router->post('admin/edit', 'UserController@edit');

$router->post('admin/delete', 'UserController@delete');

//Rotas de login

$router->post('login/realiza-login', 'LoginController@realizarLogin');

$router->get('login/logout', 'LoginController@logoutLogin');

$router->get('dashboard', 'LoginController@dashboard');

$router->get('login', 'LoginController@index');

$router->get('admin/posts', 'PostController@index');


