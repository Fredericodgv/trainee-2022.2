<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Individual</title>

    <link rel="stylesheet" href="../../../public/css/post_individual.css">
    <script defer src="js/script.js"></script>
</head>
<body>

<?php include 'App/views/site/navbar.php' ?>

    <div class="cabecalho">
        <a href="#"><img src="assets/logoCompleta.png" alt=""></a>
    </div>

    <div class="identidade-lista-de-posts">

        <div class="board">

            <div class="d-flex p-2 flex-column">
                <div class="card aux_cards">
                    <div class="card-body aux_card-body">
                        <h5 class="card-title aux_card-title"><?= $post->titulo?></h5>
                        <div class="aux_card-text card-text">
                            <p><?=$post->conteudo?><p>
                            <div class="foto-post">
                                <a href="#"><img src="../../../public/img/<?php echo $post->imagem ?>" alt=""></a>
                            </div>
            
                            <div class="foto-autor">
                                <a href="#"><img src="../../../public/img/user.png" class="card-img-top"></a>
                                <h6><?=$post->autor?></h6>
                            </div>
                        </div>                   
                    </div>

                    
                </div>
            </div>
        </div>

        <?php include 'App/views/site/footer.php' ?>

</body>
</html>