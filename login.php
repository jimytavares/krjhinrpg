<!DOCTYPE HTML>  
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    
    <style>
        .error {color: #FF0000;}
        .centro
        {
            text-align: center;
            padding-top: 200px;
        }

         body
         {
            background-image: url('Imagem/wallpaper12_1280x720.jpg');
            background-color: ;
            background-repeat: no-repeat;
            background-position: left top;
         }
    </style>

</head>
<body>  

    
    <div class="centro">        
        <div class="container">

          <img src="Imagem/Mob2022.gif">

          <form method="" action="loginChampionSelect.php">

            <div class="form-group">
              <label for="user"> <h2>Usário:</h2> </label>
              <input type="text" name="usuario" class="form-control" id="email" placeholder="Inserir Usuário">
            </div>

            <div class="form-group">
              <label for="pwd"> <h2>Senha:</h2> </label>
              <input type="password" name="senha" class="form-control" id="pwd" placeholder="Digitar Senha">
            </div>

            <!--<div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div> -->

            <button type="submit" class="btn btn-success btn-lg">Logar</button>

          </form>

        </div>
    </div>
    
</body>
</html>