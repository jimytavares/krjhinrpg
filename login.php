<!DOCTYPE HTML>  
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <style>
        .error {color: #FF0000;}
        body
        {
            background-image: url('Imagem/fundo01.jpg');
            background-size: cover;
            background-color: ;
            background-repeat: no-repeat;
            background-position:;
        }
        .margin-top-form 
        {
            text-align: center;
            padding-top: 100px;
        }
        .form-a
        {
            background-color: red;
        }
        .containerex{
            width: ;
            padding-right: 600px;
        }
    </style>

</head>
<body>
    
    <div class="margin-top-form">        
    <div class="container">
    <div class="containerex">
        
        <div class="row">
            <div class="col">
                
                <div class="box-parent-login">
                <div class="well bg-white box-login">
                    <img src="Imagem/2222.png">
                    <!--<h1 class="ls-login-logo">기아보</h1>-->
                    <form method="POST" action="Verificando-Login.php" role="form">
                                <fieldset>

                                        <div class="form-group ls-login-user">
                                            <label for="user">Usuário</label>
                                            <input class="form-control ls-login-bg-user input-lg" id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário" name="usuario">
                                        </div>

                                        <div class="form-group ls-login-password">
                                            <label for="pwd">Senha</label>
                                            <input class="form-control ls-login-bg-password input-lg" id="userPassword" type="password" aria-label="Senha" placeholder="Senha" name="senha">
                                        </div>

                                        <a href="#" class="ls-login-forgot" style="text-align:left; color:;">Esqueci minha senha</a>

                                        <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block">
                                        <p class="txt-center ls-login-signup" style="text-align:left;">Não possui um usuário no 기아보?
                                            <a href="#">Cadastre-se agora</a>
                                        </p>
                                        <p style="text-align:right; color:orange;">Copyright © JihnDickson</p>
                                </fieldset>
                            </form>
                            </div>
                 </div>
                
            </div>
        </div>
        
    </div>    
    </div>      
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</body>
</html>