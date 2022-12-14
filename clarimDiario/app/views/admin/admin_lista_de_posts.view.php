<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../public/css/admin_lista_de_posts.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,200" />
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>.material-symbols-outlined { font-size: 28px }</style>
  <script src="../../../public/js/admin_lista_de_posts.js" defer></script>
  <title>Admin - Publicações</title>
</head>

<div class="logo">
  <img src="../../../public/assets/logoCompleta.png">
</div>

 

<header>

<!--PESQUISAR-->
  <form action="admin/posts" method="post" class="search-bar-top">
    <input type="text" name = "key" placeholder="Pesquisar">
    <button type="submit" value="Submit" id="" name="submit"><span class="material-symbols-outlined">
        search
      </span></button>
  </form>
<!--PESQUISAR-->

  <!--botao de adicionar-->
  <div class="aux-button">
    <button class="adicionar-button">Adicionar Publicação</button>
  </div>

  <!--modal de adicionar-->
  <div id="modal-add" class="modal-fade">
    <div class="modal-main">
      <form method = "POST", action="posts/create">
        <div class="modal-header">
          <h1>Adicionar Publicação</h1>
        </div>
        <div class="input">
            <p class="title-add">Título da publicação</p>
          <div class="input-box">
            <input id="title" type="text" id="titulo" name="titulo" placeholder="Título da publicação">
          </div>
            <p class="content-add">Conteúdo da publicação</p>
          <div class="input-box">
            <input id="content" type="text" id="conteudo" name="conteudo" placeholder="Lorem">
          </div>
            <p class="autor-add">Autor</p>
          <div class="input-box">
            <input id="autor" type="text" id="autor" name="autor" placeholder="Autor da publicação">
          </div>
            <p class="date-add">Data</p>
          <div class="input-box">
            <input id="date" type="date" id="data_publicacao" name="data_publicacao">
          </div>
          <div class="input-box">
            <input type="file" accept="image/*" id="imagem" name="imagem">
          </div>
        </div>
        <div class="modal-aux-button"> 
          <div class="exit-button">
            <button class="sair-botao" type="button">Sair</button>
          </div>
          <div class="add-button">
            <button>Adicionar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</header>

<body>

<?php include 'App/views/admin/sidebar.php' ?>

  <table class="table caption-top table-hover">
    <thead>
      <tr class="aux-tr">
        <th scope="col" class="col-sm-1">#</th>
        <th scope="col" class="col-sm-3">Título da Publicação</th>
        <th scope="col" class="col-sm-2">Autor</th>
        <th scope="col" class="col-sm-1">Data</th>
        <th scope="col">

  <!--PESQUISAR-->

          <form action="" method="post" class="search-bar">
            <input type="text" placeholder="Pesquisar" name = "key" value="">
            <button type="submit" value="Submit" name="submit" id=""><span class="material-symbols-outlined">
                search
              </span></button>
          </form>
        </th>
      </tr>
    </thead>

  <!--PESQUISAR-->
    
    <tbody>

     <?php foreach($posts as $post): ?>
      
      <tr class="aux-tr1">
        <th scope="row"> <?php echo $post->id?> </th>
        <td data-title="Título:"><?php echo $post->titulo ?></td>
        <td data-title="Autor:"><?php echo $post->autor ?></td>
        <td data-title="Data:"><?php echo $post->data_publicacao ?></td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1 botao" data-modal="modal-view-<?php echo $post->id?>" ><span class="material-symbols-outlined">
                visibility
              </span></button>

            <!--visualizar-->
            <div id="modal-view-<?php echo $post->id?>" class="modal-fade-view">
              <div class="modal-main-view">
                  <form action="posts" method="GET">
                  <div class="modal-header-view">
                    <h1>Visualizar Publicação <?php echo $post->id?> </h1>
                  </div>
                  <div class="input-view">
                    <p class="title-add">Título da publicação</p>
                    <div class="input-box">
                      <input id="title" type="text" placeholder="<?php echo $post->titulo?>" disabled>
                    </div>
                    <p class="content-add">Conteúdo da publicação</p>
                    <div class="input-box">
                      <input id="content" type="text" placeholder="<?php echo $post->conteudo?>" disabled>
                    </div>
                      <p class="autor-add">Autor</p>
                    <div class="input-box">
                      <input id="autor" type="text" placeholder="<?php echo $post->autor?>" disabled>
                    </div>
                    <p class="date-add">Data</p>
                    <div class="input-box">
                      <input id="date" type="text" placeholder="<?php echo $post->data_publicacao?>" disabled>
                    </div>
                    <div class="input-box"><p>Imagem</p>
                      <input id="imagem" type="image" accept="image/*" placeholder="<?php echo $post->imagem?>" disabled>
                    </div>
                  </div>
                  <div class="modal-aux-button"> 
                    <div class="exit-button">
                      <button class="sair-botao" type="button">Sair</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
            <!--botao de editar-->
            <button class="aux-button-table botao" data-modal="modal-edit-<?php echo $post->id?>"><span class="material-symbols-outlined">
                edit_square
            </span></button>

            <!--modal de editar-->
            <div id="modal-edit-<?php echo $post->id?>" value="<?php echo $post->id?>" class="modal-fade-edit">
              <div class="modal-main-edit">
                <form action="posts/update" method="POST">
                    <div class="modal-header-edit">
                      <h1>Editar Publicação <?php echo $post->id?></h1>
                  </div>
                  <div class="input-edit">
                    <p class="title-add">Título da publicação</p>
                    <div class="input-box">
                      <input id="title" type="text" id="titulo" name="titulo" placeholder="Novo título" value="<?php echo $post->titulo ?>">
                    </div>
                    <p class="content-add">Conteúdo da publicação</p>
                    <div class="input-box">
                      <input id="content" type="text" id="conteudo" name="conteudo" placeholder="Novo texto" value="<?php echo $post->conteudo ?>">
                    </div>
                    <p class="autor-add">Autor</p>
                    <div class="input-box">
                      <input id="autor" type="text" id="autor" name="autor" placeholder="Autor" value="<?php echo $post->autor ?>">
                    </div>
                    <p class="date-add">Data</p>
                    <div class="input-box">
                      <input id="date" type="date" id="data_publicacao" name="data_publicacao" placeholder="aaaa/mm/dd" value="<?php echo $post->data_publicacao ?>">
                    </div>
                    <div class="input-box">
                      <input id="imagem" type="file" id="imagem" name="imagem" accept="image/*">
                    </div>
                    <p> <input type="hidden" name="id" value="<?php echo $post->id?>"> </p> <!--aqui passa o id para selecionar o post e mandar pro banco-->
                  </div>
                  <div class="modal-aux-button">
                    <div class="exit-button">
                      <button class="sair-botao" type="button">Sair</button>
                    </div>
                    <div class="add-button">
                      <button>Atualizar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
 
            <!-- botao de deletar-->
            <button class="aux-button-table-delete botao" data-modal="modal-del-<?php echo $post->id?>"><span class="material-symbols-outlined">
                delete
            </span></button>

            <!--modal de deletar-->
            <div id="modal-del-<?php echo $post->id?>" <?php $post->id?> class="modal-fade-delete">
              <div class="modal-main-delete">
                <form action="posts/delete" method="POST">
                  <div class="modal-header-delete">
                    <h1>Excluir Publicação</h1>
                  </div>
                  <div class="input-delete">
                    <p class="title-add">Tem certeza que deseja excluir a publicação?</p>
                  </div>
                  <div class="modal-aux-button-delete">
                    <div class="exit-button-delete">
                      <button class="sair-botao" type="button">Cancelar</button>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $post->id?>"> <!--o que vai direcionar pra id-->
                    <div class="add-button-delete">
                      <button>Excluir</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>
</html>