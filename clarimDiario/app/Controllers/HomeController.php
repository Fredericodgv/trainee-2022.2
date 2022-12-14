<?php

namespace App\Controllers;
class HomeController extends Controller
{
    public function landingPage()
    {
        return view('site/landing_page');
    }

    public function listaPosts()
    {
        return view('site/lista_de_posts');
    }

    public function postIndividual()
    {
        return view('site/post-individual');
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
