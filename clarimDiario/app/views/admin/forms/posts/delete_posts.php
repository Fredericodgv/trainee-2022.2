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
    <title>Admin - Excluir Publicação</title>
</head>
<body>
    <div class="container">
        <div class="form form-delete">
            <form action="../posts/delete_posts.php" method="POST">
                <div class="form-header-delete">
                    <h1>Excluir Publicação</h1>
                </div>
                <div class="input-delete">
                    <p class="title-add">Tem certeza que deseja excluir a publicação?</p>
                </div>
                <div class="aux-button-delete">
                    <div class="exit-button-delete">
                        <button>Cancelar</button>
                    </div>
                    <div class="add-button-delete">
                        <button>Excluir</button>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>