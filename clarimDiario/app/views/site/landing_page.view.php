<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/css/landing_page.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <title>Landpage Clarim Diário</title>
  </head>


  <body>
      
  <?php include 'App/views/site/navbar.php' ?>

      <div class="d-flex logo">
        <img src="../../../public/assets/logoCompleta.png">
      </div>
    

    <main class="principal">
        
      <!--Manchete Principal-->
        
        <aside class="manchete">
          <h1><span><u><i>URGENTE:</i></u></span> <i>Quem é Homem-Aranha!?</i></h1>
          <p>A população de Nova Iorque demanda a prisão do "Herói" mascarado, afinal de contas, quem está por trás da máscara? A verdade é que, a polícia não está nem aí para os moradores de Queens, precisamos pressionar a segurança local a fim de dar um ponto final nesse assunto patético sobre contos de fadas com super-heróis salvando vidas. Não estamos em uma História em QUADRINHOS!!</p>
        </aside>

        <article class="news">
          <img src="../../../public/img/main.gif" alt="Wanted">
        </article>
        
        <!--Final da Manchete Principal-->

      </main>

      <div class="news-cards">
        <h1><span><i>Últimas Notícias:</i></span></h1>
      </div>
  
    <!--Inicio dos Cards-->
    
    <div class="cards">
    <aside class="aside-cards">
    <?php foreach ($posts1 as $post): ?>
    <div class="card mb-3 aux-cards" style="max-width: 900px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="../../../public/img/<?=$post->imagem?>" class="img-fluid rounded-start aux-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body aux-struct">
            <h5 class="card-title"><?=$post->titulo?></h5>
            <p class="card-text aux-text"><?=$post->conteudo?></p>
            <p class="card-text aux-dmy"><small class="text-muted"><?=$post->autor?></small></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </aside>
  
  <!--Final dos Cards-->

      <article class="img-cards">
        <img src="../../../public/img/spider-man-vertical.png" alt="vertical-logo">
      </article>

  </div>

  <?php include 'App/views/site/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>


</html>