<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/lista_de_usuarios.css">
    <link rel="stylesheet" href="../../../public/css/forms.css">
    <script src="https://kit.fontawesome.com/6a25a8e764.js" crossorigin="anonymous"></script>
    <title>Lista de Usuários</title>
</head>

<body>

<?php include 'App/views/admin/sidebar.php' ?>

    <div class="d-flex logo">

        <img src="../../../public/img/logo.png">

    </div>

    <div class="add_btn" id="botao_add" data-modal="modal_adicionar">
        <button role="button">
            <a>Adicionar Usuário</a>
        </button>
    </div>


    <form action="/admin/create" method="post">
        <div class="aux_center hide" id="modal_adicionar">
            <div class="modal-content">
                <h1>Adicionar usuário</h1>
                <p>Nome Completo</p>
                <input class="nome" name="nome" type="text">
                <p>Email</p>
                <input class="email" name="email" type="email" placeholder="example@example.com">
                <p>Senha</p>
                <input class="senha" name="senha" type="password" placeholder="*********">

                <div class="btns">
                    <button class="btn_close" type="button">
                        Fechar
                    </button>
                    <button class="btn_add" id="add_confirm" type="submit">
                        Adicionar
                    </button>
                </div>
            </div>
        </div>
    </form>


    <div class="identidade-lista-de-usuarios">

        <div class="background-modal hide" id="background-modal"></div>

        <div class="board">
            <table class="table aux_table">
                <thead>
                    <tr class="titulo-lista-de-usuarios">
                        <th style="text-align:center;" scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">

                            <nav class="navbar aux_nav">
                                <div class="container-fluid ">
                                    <form class="d-flex aux_container" role="search">
                                        <input class="form-control me-2 aux_form" type="search"
                                            placeholder="Nome do usuário..." aria-label="Search">
                                        <button class="btn btn-primary aux_btn_nav" type="submit">Procurar</button>
                                    </form>
                                </div>
                            </nav>

                        </th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ( $variavel as $user ): ?>
                
                    <tr class="info-usuario">
                        <th class="numero-usuario" scope="row"> <?= $user->id ?> </th>
                        <td class="nome-usuario"> <?= $user->Nome ?> </td>
                        <td class="functions-usuario">
                            <button class="botao aux_btn_info-usuario" data-modal="modal_visualizar_<?= $user->id ?>" role="button">
                                <a>
                                    <i class="fa-solid fa-eye aux_icon"></i>
                                </a>
                            </button>


                            <form action = "/admin/show" method="get" >
                                <div class="aux_center hide" id="modal_visualizar_<?= $user->id ?>">
                                    <div class="modal-content">
                                        <h1>Visualizar Usuário</h1>
                                        <input type="hidden" value = "<?= $user->id ?>" name = "id" >

                                        <p>Nome Completo</p>
                                        <input class="nome" type="text" id="nome_usuario" name="nome_usuario" placeholder= <?= $user->Nome ?> disabled>
                                        <p>Email</p>
                                        <input class="email" type="email" id="email_usuario" name="email_usuario" placeholder= <?= $user->Email ?> disabled>
                                        <p>Senha</p>
                                        <input class="senha" type="password" id="senha_usuario" name="senha_usuario" placeholder= <?= $user->Senha ?> disabled>

                                        <div class="btns">
                                            <button class="botao btn_close" type="button">
                                                Fechar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <button class="botao aux_btn_info-usuario" data-modal="modal_editar_<?= $user->id ?>" role="button">
                                <a>
                                    <i class="fa-solid fa-pen-to-square aux_icon"></i>
                                </a>
                            </button>

                            <form action="/admin/edit" method="post">
                                <div class="aux_center hide" id="modal_editar_<?= $user->id ?>">
                                    <div class="modal-content">
                                    <input type="hidden" value = "<?= $user->id ?>" name = "id" >

                                        <h1>Modificar Usuário</h1>
                                        <p>Alterar Nome</p>
                                        <input class="nome" type="text" id="nome_usuario" name="nome_usuario" value = <?= $user->Nome ?>>
                                        <p>Email</p>
                                        <input class="email" type="email" id="email_usuario" name="email_usuario" value = <?= $user->Email ?>>
                                        <p>Senha</p>
                                        <input class="senha" type="password" id="senha_usuario" name="senha_usuario" value = <?= $user->Senha ?>>

                                        <div class="btns">
                                            <button class="btn_close" type="button">
                                                Fechar
                                            </button>
                                            <button class="btn_save" type="submit">
                                                Salvar
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>

                            <button class="botao aux_btn_info-usuario" data-modal="modal_deletar_<?= $user->id ?>"
                                style="background-color: red;" role="button">
                                <a>
                                    <i class="fa-solid fa-trash-can aux_icon"></i>
                                </a>
                            </button>

                            <form action="admin/delete" method="post">
                                <div class="aux_center hide" id="modal_deletar_<?= $user->id ?>">
                                    <div class="modal-content">
                                        <h1>Deletar Usuário</h1>
                                        <p>Tem certeza que quer deletar esse usuário?</p>
                                        <input type="hidden" value = "<?= $user->id ?>" name = "id" >

                                        <div class="btns">
                                            <button class="btn_close" type="button">
                                                Fechar
                                            </button>
                                            <button class="btn_delete" type="submit">
                                                Deletar
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>


                        </td>
                    </tr>
                <?php endforeach ?>                
                </tbody>
            </table>
            <?php require 'pagination.php'//'App/views/admin/includes/pagination.php';// ?>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>

    <script src="../../../public/js/lista_de_usuarios.js"></script>
</body>

</html>