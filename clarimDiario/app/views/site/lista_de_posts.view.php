<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/css/lista_de_posts.css">
    <link rel="stylesheet" href="../../../public/css/navbar_footer.css">
    <title>Lista de Posts</title>

</head>

<body>

    <div class="auxnb">
    <?php include 'App/views/site/navbar.php' ?>
    </div>
    
    <div class="navbar aux_nav">
        <div class="container-fluid ">
            <form action = "lista_de_posts" method = "post" class="d-flex aux_container" role="search">
                    <input class="form-control me-2 aux_form" type="text" name = "key" placeholder="Nome do post..."
                    aria-label="Search">
                    <button class="btn btn-primary aux_btn_nav" type="submit" value="Submit" id="" name="submit">Procurar</button>
            </form>
        </div>
</div>

    <div class="identidade-lista-de-posts">
    
    <?php foreach($posts1 as $post): ?>
        <?var_dump($post);?>
        <div class="board">
            <div class="d-flex p-2 flex-column">
                <div class="card aux_cards">
                    <div class="img-post">
                        <a href="#"><img src="../../../public/img/<?php echo $post->imagem ?>" class="card-img-top"></a>
                    </div>
                    <div class="card-body aux_card-body">
                        <h5 class="card-title aux_card-title"><?php echo $post->titulo ?></h5>
                        <div class="aux_card-text card-text">
                            <p><?php echo $post->conteudo?></p>
                            <div class="container">
                                <a href="post_individual?id=<?php echo $post->id?>" class="btn btn-primary aux_btn">Saiba Mais</a>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

        <?php include 'App/views/site/footer.php' ?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>