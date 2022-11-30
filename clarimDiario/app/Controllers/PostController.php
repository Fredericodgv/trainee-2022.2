<?php

namespace App\Controllers;

class PostController extends Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     if(!isset($_SESSION['logado'])) {
    //         return redirect('login');
    //         exit();
    //     }
    // }

    //retorna pagina principal
    public function index()
    {
        return view('admin/admin_lista_de_posts');
    }

}