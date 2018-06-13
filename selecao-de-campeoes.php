<!DOCTYPE HTML>  
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>RPG | JhinLindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        
    <!--  Meu CSS -->
    <link href="" rel="stylesheet" type="text/css" media="all"/>
    
    <style>
        .error {color: #FF0000;}
        body
        {
            background-image: url('Imagem/foto-index-3.png');
            background-size: cover;
            background-color:;
            background-repeat: no-repeat;
            background-position:;
            font-family: 'Arial';
            text-align: center;
        }
        #row-menu
        {
            background-color: #262626;
            height: 40px;
        }
        #row-geral
        {
            margin-left: 10px;
        }
        #col-menu-button
         {
             margin-top: 5px;
             text-align:center; 
             padding-top:0px; 
             color:#e6e600; 
             font-size:12px;
         }
        
        h5
        {
            color: midnightblue;
            font-size: 20px;
            font-family: "Arial", Times, serif;
            text-shadow: 0px 0px blue;
        }
        .card-background
         {
            background-color: white;  
            opacity: 0.9;
         }
    </style>

</head>
<body>
    
    <div class="row" id="row-menu">
        <div class="col">
            <img src="img/favicon-72.png" />
        </div>
        <div class="col">
            b
        </div>
        <div class="col" id="col-menu-button">
            <img src="Imagem/gold2.png" /> GOLD: 99999,999
            <button type="button" class="btn btn-outline-light btn-sm"> <i class="fa fa-sign-out" style="font-size:px;"></i>Logout!</button>
        </div>
    </div>
    
    <div class="" style="margin-top:20px;">
        <h3>Seleção de Campeções</h3>
        <p>Selecione a classe que você quer iniciar sua aventura, apos escolher determinada classe <br/>todo o progesso que foi feito com ela será salvo. Você também pode jogar com mais de uma classe.</p>
    </div>
        
    <div class="row" id="row-geral">
        <div class="col">
            
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/perso/lvs/guerreiro-lv30.gif" style="padding-left:10px;"/>
              <div class="card-body">
                <h5 class="card-title"><b>Guerreiro</b></h5>
                <p class="card-text">Classe: Guerreiro <br/> Max.Level: 100 <br/> Sub Classes: 4 <br/> </p>
                <a href="RPG-Swordman.php" class="btn btn-success">Escolher</a>
                <a href="#" class="btn btn-outline-info">Info!</a>
              </div>
            </div>
            
        </div>
        <div class="col">
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/perso/lvs/wizard.gif" style="padding-left:10px;"/>
              <div class="card-body">
                <h5 class="card-title">Bruxo</h5>
                <p class="card-text"> <b>Classe:</b> Mago <br/> <b>Max Level:</b> 100 <br/> <b>Sub Classes:</b> 3  </p>
                <a href="#" class="btn btn-success">Escolher</a>
                <a href="#" class="btn btn-outline-info">Info!</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/perso/lvs/hunter.gif" style="padding-left:10px;"/>
              <div class="card-body">
                <h5 class="card-title">Caçador</h5>
                <p class="card-text"> <b>Classe:</b> Caçador <br/> <b>Max Level:</b> 100 <br/> <b>Sub Classes:</b> 4 </p>
                <a href="#" class="btn btn-success">Escolher</a>
                <a href="#" class="btn btn-outline-info">Info!</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/perso/lvs/assassino.gif" style="padding-left:10px;"/>
              <div class="card-body">
                <h5 class="card-title">Algoz</h5>
                <p class="card-text"> <b>Classe:</b> Assassino <br/> <b>Max Level:</b> 100 <br/> <b>Sub Classes:</b> 4 </p>
                <a href="#" class="btn btn-success">Escolher</a>
                <a href="#" class="btn btn-outline-info">Info!</a>
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