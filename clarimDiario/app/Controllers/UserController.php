<?php

namespace App\Controllers;
use App\Models\User;
use App\Core\App;
use Vendor\Illuminate\Pagination\Paginator;
class UserController extends Controller
{
    public function __construct()
    {
        // parent::__construct();
        // if(!isset($_SESSION['logado'])) {
        //     return redirect('login');
        //     exit();
        // }
    }

    //retorna pagina principal
    public function index()
    {
        $page = 1;

        if (isset($_GET['page']) && !empty(($_GET['page']))) {
            $page = intval($_GET['page']);

            if ($page < 1) { return redirect('lista_de_usuarios'); }
        }

        $users_per_page = 3;

        $inicial_limit = $users_per_page * $page - $users_per_page;

        $rows = App::get('database')->contador('users');

        if ( $inicial_limit > $rows) { return redirect('lista_de_usuarios'); }

        $total = ceil($rows / $users_per_page);
        
        $variavel = App::get('database')->selectPag('users', $inicial_limit, $users_per_page);

        //  var_dump($total);
        //  die();

        return view('admin/lista_de_usuarios', compact('variavel', 'page', 'total'));
    }

    //retorna pagina individual de um elemento
    public function show()
    {

        $id = $_POST["id"];

        App::get('database')->show('users', compact('id'));

        //return redirect('lista_de_usuarios');

    }

    //retorna a pagina responsavel por criar um elemento
    public function create()
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        App::get('database')->insert('users', compact('nome', 'email', 'senha'));

        return redirect('lista_de_usuarios');
    }

    // valida e armazena os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function store()
    {
        //Exemplo para o registro de um usuario

        /*$filterForm = [
            "name" => FILTER_SANITIZE_STRIPPED,
            "email" => FILTER_VALIDATE_EMAIL,
            "password" => FILTER_SANITIZE_STRIPPED,
            "birthdate" => FILTER_SANITIZE_STRIPPED,
            "gender" => FILTER_SANITIZE_STRIPPED,
        ];*/

        //$userData = filter_input_array(INPUT_POST, $filterForm);

        /*if(in_array(false, $userData)) {
            $errors = array_keys($userData, false, false);
            $_SESSION["errors"] = [];
            foreach($errors as $error) {
                $_SESSION["errors"][$error] = "Coloque sua mensagem de erro";
            }
            return view('...');
        }*/

        /*try {
            $userData["password"] = password_hash($userData["password"], PASSWORD_BCRYPT);
            $user = User::create($userData);
        } catch(QueryException $PDOException) {
            $_SESSION["error"] = ["email" => "Email já foi cadastrado"];
            return view('guests/register_page');
        }
        unset($_SESSION["error"]);
        $_SESSION["logado"] = $user->getAttributes();
        return redirect('...');*/
    }

    // retorna a pagina para editar um elemento
    public function edit()
    {     
        $id = $_POST['id'];
        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $senha = $_POST['senha_usuario'];

        App::get('database')->edit('users', $_POST['id'], compact('nome', 'email', 'senha'));

        return redirect('lista_de_usuarios');

    }

    // valida e atualiza os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function update()
    {
        //Muito trampo escrever, esse aqui vocês dão uma pensada ai.
    }

    // deleta um elemento e redireciona para alguma rota
    public function delete()
    {
        $id = $_POST["id"];

        App::get('database')->remove('users', compact('id'));

        return redirect('lista_de_usuarios');
    }

}