<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../../public/css/admin_lista_de_posts.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,200" />
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style>.material-symbols-outlined { font-size: 28px }</style>
  <script src="../../../../public/js/admin_lista_de_posts.js" defer></script>
  <title>Admin - Publicações</title>
</head>

<div class="logo">
  <img src="../../../../public/assets/logoCompleta.png">
</div>

<header>

  <form action="" class="search-bar-top">
    <input type="text" placeholder="Pesquisar">
    <button type="submit"><span class="material-symbols-outlined">
        search
      </span></button>
  </form>

  <div class="aux-button">
    <button class="adicionar-button">Adicionar Publicação</button>
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
          <form action="" class="search-bar">
            <input type="text" placeholder="Pesquisar">
            <button type="submit"><span class="material-symbols-outlined">
                search
              </span></button>
          </form>
        </th>

      </tr>
    </thead>
    <tbody>
      <tr class="aux-tr1">
        <th scope="row">1</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">2</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">3</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">4</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">5</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">6</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">7</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">8</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">9</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>
      <tr class="aux-tr1">
        <th scope="row">10</th>
        <td data-title="Título:">Título da Publicação</td>
        <td data-title="Autor:">Felipe</td>
        <td data-title="Data:">dd/mm/aaaa</td>

        <td class="buttons">
          <a>
            <button class="aux-button-table-1"><span class="material-symbols-outlined">
                visibility
              </span></button>

            <button class="aux-button-table"><span class="material-symbols-outlined">
                edit_square
              </span></button>

            <button class="aux-button-table-delete"><span class="material-symbols-outlined">
                delete
              </span></button>
          </a>
        </td>

      </tr>

    </tbody>

  </table>

  </div>



  <div id="modal-add" class="modal-fade">

    <div class="modal-main">
      <form action="#">
        
        <div class="modal-header">
          <h1>Adicionar Publicação</h1>
        </div>

        <div class="input">

          <p class="title-add">Título da publicação</p>

          <div class="input-box">
            <input id="title" type="text" placeholder="Título da publicação">
          </div>

          <p class="content-add">Conteúdo da publicação</p>

          <div class="input-box">
            <input id="content" type="text" placeholder="Lorem">
          </div>

          <p class="autor-add">Autor</p>

          <div class="input-box">
            <input id="autor" type="text" placeholder="Autor da publicação">
          </div>

          <p class="date-add">Data</p>

          <div class="input-box">
            <input id="date" type="date">
          </div>

          <div class="input-box">
            <input type="file" accept="image/*">
          </div>

        </div>

        <div class="modal-aux-button"> 

          <div class="exit-button">
            <button class="sair-botao">Sair</button>
          </div>

          <div class="add-button">
            <button>Adicionar</button>
          </div>
        </div>

      </form>
    </div>
  </div>



  <div id="modal-view" class="modal-fade-view">

    <div class="modal-main-view">
        <form action="#">

            <div class="modal-header-view">
                <h1>Visualizar Publicação</h1>
            </div>

            <div class="input-view">

                <p class="title-add">Título da publicação</p>

                <div class="input-box">
                    <input id="title" type="text" placeholder="Título da publicação" disabled>
                </div>

                <p class="content-add">Conteúdo da publicação</p>

                <div class="input-box">
                    <input id="content" type="text" placeholder="Lorem" disabled>
                </div>

                <p class="autor-add">Autor</p>

                <div class="input-box">
                    <input id="autor" type="text" placeholder="Autor" disabled>
                </div>

                <p class="date-add">Data</p>

                <div class="input-box">
                    <input id="date" type="date" disabled>
                </div>

                <div class="input-box">
                    <input id="imagem" type="file" accept="image/*" disabled>
                </div>

            </div>

            <div class="modal-aux-button"> 

                <div class="exit-button">
                    <button class="sair-botao">Sair</button>
                </div>
            </div>

        </form>
    </div>
</div>


<div id="modal-edit" class="modal-fade-edit">

  <div class="modal-main-edit">
      <form action="#">
          <div class="modal-header-edit">
              <h1>Editar Publicação</h1>
          </div>

          <div class="input-edit">

              <p class="title-add">Título da publicação</p>

              <div class="input-box">
                  <input id="title" type="text" placeholder="Novo título">
              </div>

              <p class="content-add">Conteúdo da publicação</p>

              <div class="input-box">
                  <input id="content" type="text" placeholder="Novo texto">
              </div>

              <p class="autor-add">Autor</p>

              <div class="input-box">
                  <input id="autor" type="text" placeholder="Autor">
              </div>

              <p class="date-add">Data</p>

              <div class="input-box">
                  <input id="date" type="date">
              </div>

              <div class="input-box">
                  <input id="imagem" type="file" accept="image/*">
              </div>

          </div>

          <div class="modal-aux-button">

              <div class="exit-button">
                  <button class="sair-botao">Sair</button>
              </div>

              <div class="add-button">
                  <button>Atualizar</button>
              </div>
            </div>

      </form>
  </div>
</div>

<div id="modal-del" class="modal-fade-delete">

  <div class="modal-main-delete">
      <form action="#">
          <div class="modal-header-delete">
              <h1>Excluir Publicação</h1>
          </div>

          <div class="input-delete">
              <p class="title-add">Tem certeza que deseja excluir a publicação?</p>
          </div>

          <div class="modal-aux-button-delete">

              <div class="exit-button-delete">
                  <button class="sair-botao">Cancelar</button>
              </div>

              <div class="add-button-delete">
                  <button>Excluir</button>
              </div>
            </div>

      </form>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</body>

</html>