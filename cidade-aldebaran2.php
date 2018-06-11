<!DOCTYPE html>

<html>
<head>
        
      <meta charset="utf-8">
      <title>RPG | JhinLindo</title>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

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

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Bootstrap core CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <!-- Material Design Bootstrap -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">   
        
    
     <style>
         body
         {
            background-image: url('Imagem/aldebaran-wallpaper.jpg');
            background-size: cover;
            background-color:;
            background-repeat: no-repeat;
            background-position:;
         }
         #menu-background
         {
            background: #262626;
            height: 42PX; /* largura do menu */
         }
         
         #col-menu-button
         {
             padding-top: ;
             text-align:center; 
             padding-top:0px; 
             color:#e6e600; 
             font-size:12px;
         }
         #input-menu
         {
             border-radius: 7px;
             border-style: ;
             border-color: darkgray;
             background-color: ghostwhite;
             padding-top: ;
             width: 160px;
             height: ;
             border-width: 0.2px;
         }
             #input-menu:hover{
                border-color: blue;
             }
         
         #row-card
         {
            padding-left:90px; 
            padding-top: 70px;
         }
         .card-background
         {
            background-color: white;  
         }

         
         .buttonmenu
         {
            border-radius: 20px !important;
            height: 90% !important;
            width: 38px !important;
            background: linear-gradient(to bottom left, red, yellow) !important;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) !important;
            border-style: solid;
         }
             .buttonmenu:hover{
                border-radius: 20px !important;
                height: 100% !important;
                width: 40px !important;
                background: linear-gradient(to bottom right, red, yellow) !important;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) !important;
                border-style: none;
             }
     </style>
    
</head>
<body>
    
    <div class="row" id="menu-background">
            <div class="col-5" style="color:white; padding-left:120px;">
                <div class="row">
                    <div class="col-2">
                        <img src="Imagem/perso/lvs/guerreiro.gif" />
                    </div>
                    <div class="col-7" style="padding-top:12px; font-family: 'Verdana', Times, serif;">
                        Cidade de Al de Baran
                    </div>
                </div>
            </div>
            
            <div class="col" style="padding-top:8px; color:white;">
                <form action="/action_page.php">
                    <i class="fa fa-pied-piper-alt" style="font-size:22px; color:#6666ff;"></i> <input type="text" name="FirstName" id="input-menu" value=""><br>
                </form>
            </div>
        
            <div class="col" id="col-menu-button">
                <a href="swordman.php"> <button type="button" class="btn btn-outline-success btn-sm">Status</button> </a>
                <button type="button" class="btn btn-outline-light btn-sm"> <i class="fa fa-sign-out" style="font-size:px;"></i>Logout!</button>
                <img src="Imagem/gold2.png" /> GOLD: 99999,999
            </div>
    </div>
    
    <!-- <button type="button" class="buttonmenu"> <i class="fa fa-sign-out" style="font-size:16px; color:white;"></i> </button> -->
    
    <div class="row" id="row-card">
        <div class="col">
            
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/Pronteira/npc-info.gif" style="padding-left:80px;"/>
              <div class="card-body">
                <h5 class="card-title"><b>Guarda da Cidade</b></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Info!</a>
              </div>
            </div>
            
        </div>
        <div class="col">
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/Pronteira/npc-dormir-pronteira.gif" style="padding-left:80px;"/>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card-background" style="width: 18rem;">
              <img src="Imagem/Pronteira/npc-ralph-pronteira.gif" style="padding-left:80px;"/>
              <div class="card-body">
                <h5 class="card-title">Cavaleiro Ralph</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
    </div>    
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>