<!DOCTYPE HTML>  
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .error {color: #FF0000;}
    </style>
    
</head>

<body>  

    <?php 
    
        $loginUser = $_GET['usuario'];
        $senhaUser = $_GET['senha'];

        if ( $loginUser == "jimydickson" && $senhaUser == 123456 || $loginUser == "admin" && $senhaUser == "admin" )
        {
            include ( 'SelecaoDeCampeao.php' );
        } else{
            echo "Login ou Senha Incorreto";
        }
    
    ?>
    

</body>
</html>