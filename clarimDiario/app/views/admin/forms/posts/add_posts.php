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
    <title>Admin - Adicionar Publicação</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="#" method="POST">
                <div class="form-header">
                    <h1>Adicionar Publicação</h1>
                </div>
                <div class="input">
                    <p class="title-add">Título da publicação</p>
                    <div class="input-box">
                        <input id="title" type="text" placeholder="Título da publicação" required>
                    </div>
                    <p class="content-add">Conteúdo da publicação</p>
                    <div class="input-box">
                        <input id="content" type="text"  placeholder="Lorem" required>
                    </div>
                    <p class="autor-add">Autor</p>
                    <div class="input-box">
                        <input id="autor" type="text"  placeholder="Autor da publicação" required>
                    </div>
                    <p class="date-add">Data</p>
                    <div class="input-box">
                        <input id="date" type="date"  required>
                    </div>
                    <div class="input-box">
                        <input id="imagem" type="file"  accept="image/*" required>
                        <label for="file">
                            <span class="material-symbols-outlined">
                                add_a_photo
                            </span> &nbsp;
                            Escolha uma Imagem
                        </label>
                    </div>
                </div>
                <div class="aux-button">
                    <div class="exit-button">
                        <button>Sair</button>
                    </div>
                    <div class="add-button">
                        <button>Adicionar</button>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>