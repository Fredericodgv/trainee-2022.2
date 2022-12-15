<?php

namespace App\Controllers;
use App\Models\User;
use App\Core\App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use mysqli;

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if(!empty($_SESSION['logado']))
        {
            return redirect('dashboard');
        }
        
        return view('admin/login');
    }

    public function realizarLogin()
    {
        $login_email = filter_input(
            INPUT_POST,
            'login_email',
            FILTER_VALIDATE_EMAIL
        );

        $login_senha = filter_input(
            INPUT_POST,
            'login_senha',
            FILTER_SANITIZE_SPECIAL_CHARS
        );

        $users_email = App::get('database')->buscar_users($login_email);

        if(!$users_email){
            $_SESSION['login_invalido'] = "Não foi possível realizar o login!";
            return redirect('login');
            exit();
        }

        if(strcmp($login_senha, $users_email[0]->Senha)) {
            $_SESSION['login_invalido'] = "Não foi possível realizar o login!";
            return redirect('login');
            exit();
        }

        $_SESSION['logado'] = true;
            return redirect('dashboard');
            exit();
    }

    public function logoutLogin() 
    {
        session_start();
        $_SESSION['logado'] = false;
        session_destroy();
        return redirect('login');
        exit();
    }

    public function dashboard() 
    {
        return view('admin/dashboard');
    }

}