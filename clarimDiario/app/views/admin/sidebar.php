<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/css/sidebar.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">        <script src="https://kit.fontawesome.com/3a30e9ef11.js" crossorigin="anonymous"></script>
        <title>Admin - Sidebar</title>
    </head>

    <body>
        
        <input type="checkbox" id="check">
        <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
        </label>
        
        <div class="sidebar">
        
            <header>Clarim Diário</header>
        
            <a href="/dashboard" class="aux-li">
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>
        
            <a href="/admin/posts" class="aux-li">
                <i class="fa-solid fa-eye"></i>
                <span>Publicações</span>
            </a>
        
            <a href="/lista_de_usuarios" class="aux-li">
                <i class="fa-solid fa-users"></i>
                <span>Usuários</span>
            </a>
        
            <a href="/login/logout" class="aux-li">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="logout">Logout</span>
            </a>    
            
            <div class="logo" id="logo_sidebar">
                <img src="../../../public/assets/logoSemBg.png">
            </div>
        
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    </body>

</html>