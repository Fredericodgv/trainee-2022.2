<?php

namespace App\Controllers;

use App\Core\App;

use App\Models\Post;

class PostController extends Controller
{
//    public function __construct()
//    {
//        parent::__construct();
//        if(!isset($_SESSION['logado'])) {
//            return redirect('login');
//            exit();
//        }
//    }

    //retorna pagina principal
    public function index()
    {
        if(!empty($_POST['key']))
        {
            $post = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_SPECIAL_CHARS);

            $posts = App::get('database')->buscar($post);
            //paginacao...

            return view('admin/admin_lista_de_posts', compact('posts')); 

        }

        $posts = Post::all();

        return view('admin/admin_lista_de_posts', compact('posts')); //'vari'

    }

    //retorna pagina individual de um elemento
    public function show()
    {
        
        //$id = $_GET['id'];

        //return view('site/post-individual', compact('postindiv'));

        
        //$id = "validação da variavel global $_GET no indice que você quiser. Por exemplo $_GET['id']. Preferenciamentel coloque o campo de identificação do usuario com o nome de id"
        //$exemplo = App\Models\Exemplo::find($id);
        //return view('...', compact("exemplo"))
    }

    //retorna a pagina responsavel por criar um elemento
    public function create()
    {
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];
        $data_publicacao = $_POST['data_publicacao'];
        $autor = $_POST['autor'];

        App::get('database')->insert('posts', compact('titulo', 'conteudo', 'imagem', 'data_publicacao', 'autor'));

        return redirect('admin/posts');
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
        //$id = "validação da variavel global $_GET no indice que você quiser. Por exemplo $_GET['id']. Preferenciamentel coloque o campo de identificação do usuario com o nome de id"
        //$exemplo = App\Models\Exemplo::find($id);
        //return view('...', compact("exemplo"))
    }

    // valida e atualiza os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function update()
    {
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];
        $data_publicacao = $_POST['data_publicacao'];
        $autor = $_POST['autor'];

        App::get('database')->edit('posts', $_POST['id'], compact('titulo', 'conteudo', 'imagem', 'data_publicacao', 'autor'));

        return redirect('admin/posts');
    }

    // deleta um elemento e redireciona para alguma rota
    public function delete()
    {
        $id = $_POST['id'];
        var_dump($id);

        App::get('database')->delete('posts', $id);

        return redirect('admin/posts');
    }

}