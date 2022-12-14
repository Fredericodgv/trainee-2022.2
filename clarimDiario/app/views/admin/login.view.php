<!DOCTYPE html>

<html lang="pt-br">

    <head>
        
        <title>Login</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/css/login.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito&display=swap" rel="stylesheet"></link>


    </head>

    <body>
          <section class="vh-100 gradient-custom">
            <div class="container py-5 h-85">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                      <div class="mb-md-5 mt-md-4 pb-5">
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2><br>

                        <form action="/login/realiza-login" method="post">
                        <div class="form-outline form-white mb-4">
                          <input required type="email" name="login_email" id="typeEmailX" class="form-control form-control-lg" placeholder="Email"/>
                          <label class="form-label" for="typeEmailX"></label>
                        </div>
                        <div class="form-outline form-white mb-4">
                          <input required type="password" name="login_senha" id="typePasswordX" class="form-control form-control-lg" placeholder="Senha"/>
                          <label class="form-label" for="typePasswordX"></label>
                        </div>
                        <button class="entrar">Entrar</button><p></p>
                        </form>



                        <div class="ajuda">
                            <a href="#">Precisa de ajuda?</a>
                        </div>
                        <div class="logo_fim">
                            <img height="140px" src = "../../../public/img/logoSemBgBW.png" alt="Logo Clarim Diario">
                        </div>
                      </div>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
    
    </body>
</html>