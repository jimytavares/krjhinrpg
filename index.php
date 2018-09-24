<!DOCTYPE HTML>  
<html>
<head>
    
    <?php 
        session_start();  
        if( $_SESSION['logado']) 
        {
            header('location:selecao-de-campeoes.php');
        }
    ?>

    <meta charset="utf-8">
    <title>RPG | JhinLindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Standard -->
    <link rel="shortcut icon" href="img/favicon-144.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-144.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-114.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-72.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-57.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <!--  Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    
    <style>
        body {
            background-image: url('Imagem/fundo01.jpg');
            background-size: cover;
            background-color: ;
            background-repeat: no-repeat;
            background-position:;
        }
    </style>

</head>
<body>

    <section>
        <div class="container box-input">
            
            <h2 style="text-align:center; color:white;"> <i class="fab fa-keybase"></i> Tekketsu no orphans </h2>

            <form method="POST" action="Verificando-Login.php" role="form">
                <fieldset>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fas fa-user"></i> </span>
                      </div>
                      <input type="text" class="form-control" aria-label="Usuário" placeholder="Username" name="usuario" autocomplete="off" onfocus="this.value='';">
                    </div>

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"> <i class="fas fa-key"></i> </span>
                      </div>
                      <input type="password" class="form-control" aria-label="Senha" placeholder="Password" name="senha" onfocus="this.value='';">
                    </div>

                    <input type="submit" value="LOGIN" class="btn btn-input-box">

                    <div class="box-buttons">
                        <button class="btn btn-forgot btn-sm">Register</button>
                        <button class="btn btn-forgot btn-sm">Forgot</button>
                        <button class="btn btn-forgot btn-sm">Account!</button>
                    </div>

                    <p class="txt-center ls-login-signup" style="text-align:center; margin-top:50px; background-color:white; width: 70%; margin-left:15%;">Wellcome to 기아보?
                        <a href="#" style="color:orange;">Copyright © JihnDickson</a>
                    </p>

                </fieldset>
            </form>

        </div>
    </section>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>