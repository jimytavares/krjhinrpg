<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style> 
        body{
	        background-image: url('Imagem/');
	        background-repeat: repeat;
	        background-position: left top;
        }
    </style>
    
</head>

<body>
          <!--- Tela da Logo -->
            <?php include ('inc/logo.inc'); ?>
            
            <div class="center">
              <h3>Informações do Jogo. É importante lê todas as informações abaixo.</h3>
            </div>
            
            <div class="center">
                <button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#demo">O Jogo</button>
                  <div id="demo" class="collapse">
                       <br/>
                    <b>O Jogo:</b> flui e tem consequência de acordo com suas escolhas no "Action the game".<br />Existe ações("Action the game") especificas para cada missão, o "Action the game" são suas decisões.<br /> Se você iniciar um missão X e usa no "Action the game" errado, você voltara para o inicio do jogo, assim perdendo todo progresso.
                        <br />
                  </div>
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="collapse" data-target="#tele">Teletransporte</button>
                  <div id="tele" class="collapse">
                         <br/>
                      <b>Teletransporte:</b>Tem a função de teletransportar o jogador para cidades ou mapas, os codigos das cidades/mapas aparecem no decorrer do jogo quando você as descobre.
                          <br/>
                  </div>
                  
                  <button type="button" class="btn btn-success btn-xs" data-toggle="collapse" data-target="#classe">Sua Classe</button>
                  <div id="classe" class="collapse">
                           <br/>
                    <b>Sua Classe:</b> Espadachim (Sobre)
                            <br />
                         Espadachins podem usar as melhores armaduras no Tekketsu no Orphs, que combinadas 
                            <br />
                         com o seu alto vigor e capacidade de se curarem rapidamente, os tornam a frente de ataque em qualquer tipo de combate. 
                            <br />
                         São capazes de empunhar tanto lanças quanto espadas de uma ou duas mãos, e estão sempre prontos 
                             <br/>
                  </div>
                  
                  <button type="button" class="btn btn-info btn-xs" data-toggle="collapse" data-target="#classeM">Mudar Classe</button>
                  <div id="classeM" class="collapse">
                    11Lorem ipsum dolor sit amet, consectetur adipisicing elit
                  </div>
                  
                  <button type="button" class="btn btn-warning btn-xs" data-toggle="collapse" data-target="#level">Leveis</button>
                  <div id="level" class="collapse">
                       <br />
                    <b>Level:</b> A cada 5 leveis você pode avançar de classe. Toda classe tem suas evoluções, deixando o personagem mais forte e com novas habilidades. <br />
                    De acordo com os leveis que você vai conseguindo durante o jogo seu personagem ganhara também status por cada nível
                        <br />
                    independete dos itens adquiridos no decorrer do game.
                 </div>
                     
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="collapse" data-target="#codigos">Codigos</button>
                  <div id="codigos" class="collapse">
                        <br />
                    <b>Códigod do Jogo:</b> Algumas missões podem liberar código, que lhe darão itens ou missões secretas
                    digitando eles nesse campo.
                       <br />
                  </div>              
            </div>
            
            <br />
            
   <div class="container">
    <p> 
       <img src="Imagem/perso/lvs/person_espadachin.jpg" align="left"/>
        Um RPG em PHP/HTML feito pelo lindo JimyDickson <br /><b>O jogo:</b> flui e tem consequência de acordo com suas escolhas no "Action the game".<br />Existem ações("Action the game") especificas para cada missão, o "Action the game" são suas decisões.<br /> Se você iniciar um missão X e usa no "Action the game" errado, você voltara para o inicio do jogo, assim perdendo todo progresso.<br /><b>Teletransporte:</b> Tem a função de teletransportar o jogador para cidades ou mapas, os codigos das cidades/mapas aparecem no decorrer do jogo quando você as descobre.
            <br /><br />
        <b>Sua Classe:</b> Espadachim (Sobre)
            <br />
        Espadachins podem usar as melhores armaduras no Tekketsu no Orphs, que combinadas 
            <br />
        com o seu alto vigor e capacidade de se curarem rapidamente, os tornam a frente de ataque em qualquer tipo de combate. 
            <br />
        São capazes de empunhar tanto lanças quanto espadas de uma ou duas mãos, e estão sempre prontos 
            <br />
        <b>Códigod do Jogo:</b> Algumas missões podem liberar código, que lhe darão itens ou missões secretas
           digitando eles nesse campo.
            <br /><br />
        <b>Level:</b> A cada 5 leveis você pode avançar de classe. Toda classe tem suas evoluções, deixando o personagem mais forte e com novas habilidades. <br />
        De acordo com os leveis que você vai conseguindo durante o jogo seu personagem ganhara também status por cada nível
            <br />
        independete dos itens adquiridos no decorrer do game.
    </p>
   </div> 
   
    <!-- <img src="Imagem/camfogo.png" />
    <img src="Imagem/camgelo.png" /> -->
    
    <?php
        
        $Classe = "Espadachim";
        $Nome = "Cloud";
        $Vida = 90 / 8;
        $Def = 9 / 0.5;
        $atk1 = 5 / 0.6;
        $atk2 = +5 / 0.2;
        $mage1 = 0;
        $mage2 = 0;
        $status = array ("Classe: Espadachim", "Nome: Cloud", "Vida Max: 100");
        //size="10 "
        $action = "<b>Action The Game:</b>";
    ?>
        
        
    <div class="center">
        <div class="alert alert-success">
            <strong>Para iniciar</strong> o game, você deve escolher qual caminho seguir, Fogo ou Gelo.
        </div>    
    </div>
      
        <!---- Action de Game GLOBAL ---->   
            <?php include ('inc/action-the-game.inc'); ?>
                        <br />   
        
        <!---- Caminho Fogo ou Gelo ---->
            <?php include ('inc/caminhoFogoGelo.inc'); ?>
    

</body>
</html>