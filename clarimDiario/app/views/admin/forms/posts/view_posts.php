<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/admin_posts_forms.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Admin - Visualizar Publicação</title>
</head>

<body>
    <div class="container">
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
                    <div class="input-box">
                      <input id="imagem" type="file" accept="image/*" placeholder="<?php echo $post->imagem?>" disabled>
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
    </div>
</body>

</html>