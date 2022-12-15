<?php

namespace App\Controllers;

use App\Core\App;

use App\Models\Post;

class HomeController extends Controller
{
    public function landingPage()
    {
        $posts1 = Post::all()->take(5);

        return view('site/landing_page', compact('posts1'));
    }

    public function listaPosts()
    {
        if(!empty($_POST['key']))
        {
            $post = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_SPECIAL_CHARS);
            var_dump($post);

            $posts1 = App::get('database')->buscar($post);
            var_dump($posts1);
            //paginacao...

            return view('site/lista_de_posts', compact('posts1')); 

        }

        $posts1 = Post::all();

        return view('site/lista_de_posts', compact('posts1'));
    }

    public function postIndividual()
    {

        $id = $_GET['id'];

        $post = App::get('database')->buscar_postsID($id);

        return view('site/post-individual', compact('post'));
    }

    public function navbar() 
    {
        return view('site/navbar_footer');
    }

    public function sidebar()
    {
        return view('admin/sidebar');
    }
}
