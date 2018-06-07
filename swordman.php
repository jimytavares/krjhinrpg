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

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        
      <!--  Meu CSS -->
      <link href="css/texxte.css" rel="stylesheet" type="text/css" media="all"/>
        
    </head>
<body>
<section class="animsition">

<div id="leftSide" class="gradient">
    
    <div id="home" >
        
  		    <img src="Imagem/logo-game.png" alt="" style="text-align: center; padding-left: 200px; padding-top: 50px" />

            <div style="color: white; padding-left: 30px;">
              
                 <p> 
                   <!--<img src="Imagem/perso/lvs/person_espadachin.jpg" align="left"/>
                    Um RPG em PHP/HTML feito pelo lindo JimyDickson -->
                     
                     <br />
                     • O jogo se desenvolve de acordo com suas escolhas na "Ação do Jogo".
                     <br />
                     • Existe ações("Ação do Jogo") especificas para cada missão, no "Ações do Jogo" são suas decisões.
                     <br /> 
                     • Se você iniciar um missão "X" e usa no "Ações do Jogo" ERRADO, você voltara para o inicio do jogo, assim perdendo todo progresso.
                    
                     <br /><br />
                     Teletransporte: Tem a função de teletransportar o jogador para cidades ou mapas, os codigos das cidades/mapas aparecem no decorrer do jogo quando você as descobre.
                     <br /><br />
                     Código: No decorrer do jogo você ganha bonus e pode participar de eventos, através desses codigos que se consegue durante o jogo use o campo para adquirir a recompensa
                     <br /><br />
                     Level: A cada 30 leveis você pode avançar de classe. Toda classe tem suas evoluções, deixando o personagem mais forte e com novas habilidades.
                     De acordo com os leveis que você vai conseguindo durante o jogo seu personagem ganhara também status por cada nível independete dos itens adquiridos no decorrer do game.
                   
                     <!--<b>Sua Classe:</b> Espadachim (Sobre)
                        <br />
                    Espadachins podem usar as melhores armaduras no Tekketsu no Orphs, que combinadas 
                        <br />
                    com o seu alto vigor e capacidade de se curarem rapidamente, os tornam a frente de ataque em qualquer tipo de combate. 
                        <br />
                    São capazes de empunhar tanto lanças quanto espadas de uma ou duas mãos, e estão sempre prontos -->
                     
                </p>
                
                <div class="center" style="padding-left: 180px;">
                    
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
                
            </div>

            <ul class="social_icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
            </ul>

    </div>
    
</div>

<div id="rightSide">

            
        <!-- ###################### 01: AÇÕES ########################## -->

        <div id="subscribe">

                      <h1 style="text-align:center; color: white;"><b>Ações do Jogo</b></h1>

                        <div class="service row">
                          <div class="feature col-sm-3 col-xs-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                            <i class="ion-heart"></i>
                            <h6>STATUS</h6>
                          </div>

                          <div class="feature col-sm-3 col-xs-3">
                            <i class="ion-erlenmeyer-flask"></i>
                            <h6>ITENS</h6>
                          </div>

                          <div class="feature col-sm-3 col-xs-3">
                            <i class="ion-waterdrop"></i>
                            <h6>SKILL'S</h6>
                          </div>

                          <div class="feature col-sm-3 col-xs-3">
                            <i class="ion-code"></i>
                            <h6>CÓDIGOS</h6>
                          </div>
                        </div>

                      <BR/>

                      <form action="" method="post">  
                        <p>    <b>Action The Game</b> 
                                <img src="Imagem/perso/lvs/sowrdGIF.gif" />
                        </p> 
                        <input type="text" name="valor" value="">
                        <button class="buttonA buttonA1">Seguir</button>
                                <br>
                     </form>

                <!-- ********** MODAL ********* -->

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              ...
                            </div>
                          </div>
                        </div>

                    <!-- <form id="contact_form" class="row" method="post" action="agency.php">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" name="valor" value="" class="input-name" placeholder="Ações do Jogo">
                          <!--<input type="email" name="email" class="input-email" placeholder="Teletransporte"> 
                        </div>

                         <!--<div class="col-sm-6 col-xs-12">
                          <textarea name="message" class="input-message" placeholder="Message"></textarea>
                        </div> 

                        <div class="col-sm-12 col-xs-12">
                          <button type="submit" class="submit">SEGUIR</button>
                        </div>
                      </form> -->

                      <!---- Caminho Fogo ou Gelo ---->
                      <?php include ('inc/caminhoFogoGelo.inc'); ?>

        </div>

        <!-- ###################### 02: MENU GERAL ########################## -->            

        <div class="about">

                    <h2 style="text-align:center;">Menu Geal do Jogo</h2>

                    <div class="service row">
                      <div class="feature col-sm-3 col-xs-3">
                        <i class="ion-icecream" data-toggle="collapse" data-target="#troggleloja"></i>
                        <h6>LOJA</h6>
                      </div>

                      <div class="feature col-sm-3 col-xs-3">
                        <i class="ion-earth" data-toggle="modal" data-target="#modalmapa"></i>
                        <h6>MAPA</h6>
                      </div>

                      <div class="feature col-sm-3 col-xs-3">
                        <i class="ion-document-text" data-toggle="collapse" data-target="#trogglemissoes"></i>
                        <h6>MISSÕES</h6>
                      </div>

                      <div class="feature col-sm-3 col-xs-3">
                        <i class="ion-code" data-toggle="collapse" data-target="#trogglepersonagem"></i>
                        <h6>Evoluções</h6>
                      </div>
                    </div>

                    <hr style="border-width: 3px;">

                <!-- **** MODAL **** -->
                    <div id="trogglemissoes" class="collapse" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px;">
                        <table class="table">
                          <thead style="background-color:#011627; color:#ffffff;">
                            <tr>
                              <th scope="col">Recompensa</th>
                              <th scope="col">Missão</th>
                              <th scope="col">Dificuldade</th>
                              <th scope="col">Adquirir</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row"> <img src="Imagem/itens/manto-sagrado.png"  alt="This is my work" class="img-responsive" width="" height=""/> </th>
                              <td>Vá a igreja e trabalhe por alguns dias para conseguir 12 pedaços de pano sagrado.</td>
                              <td>Otto</td>
                              <td><button type="button" class="btn btn-primary">Criar</button></td>
                            </tr>
                            <tr>
                              <th scope="row"> <img src="Imagem/itens/armadura-madeira.png"  alt="This is my work" class="img-responsive" width="" height=""/> </th>
                              <td>Adquirir 100 toras de madeira na floresta.</td>
                              <td>Thornton</td>
                              <td><button type="button" class="btn btn-primary">Criar</button></td>
                            </tr>
                            <tr>
                              <th scope="row"> <img src="Imagem/itens/armadura-prata.png"  alt="This is my work" class="img-responsive" width="" height=""/> </th>
                              <td>Conseguir 20 pedras sagradas.</td>
                              <td>the Bird</td>
                              <td><button type="button" class="btn btn-primary">Criar</button></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>


                    <div class="modal fade" id="modalmapa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">WORLD MAP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <img src="Imagem/world-map.jpg" width="1080" height="520"/>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                            <button type="button" class="btn btn-primary">Salvar</button>
                          </div>
                        </div>
                      </div>
                    </div>



        </div>

        <!-- ###################### 03: STATUS PREMIUM ########################## -->

        <div class="pricing">

                    <p>Classe: </p>        

                    <div class="row">
                      <div class="offers col-sm-8 col-xs-8">
                        <ul class="col-sm-6 col-xs-6">
                          <li>Ataque: 00</li>
                          <li>Defesa: 00</li>
                          <li>Magia: 00</li>
                        </ul>

                        <ul class="col-sm-6 col-xs-6">
                          <li>HP: 00</li>
                          <li>MP: 00</li>
                          <li>Vel.Atk: 00</li>
                        </ul>
                      </div>

                      <div class="price col-sm-4 col-xs-4">
                        <h5 class="rate">99</h5>
                        <p><strong>Distribuir</strong></p>
                      </div>
                    </div>

        </div>

        <!-- ###################### 04: MAPAS PARA TELETRANSPORTE ########################## --> 

        <div class="project">
            
                    <h1 style="text-align:center;">Teletransporte <img src="Imagem/portal2.gif" />  </h1>
                    <p style="color: grey; text-align:center;">Para se teletransporta para outra cidade, você precisa de 1 ticket ou <br/> 100 de gold. Selecione a cidade e clique em "Teletransporta".</p>
            
                    <ul class="gallery project_navigation">
                      <li class="item col-sm-6 col-xs-12">
                        <figure>
                          <img src="Imagem/Cidades/aldebaran-city.jpg" alt="This is my work" class="img-responsive" />
                          <figcaption class="caption">
                            <div class="photo-details">
                              <h4>Cidade de Al de Baran</h4>
                              <span>Cidade das Magias</span>
                            </div>
                            <a href="#project1" class="view">INFO</a>
                            <a href="#project1" class="view">Entrar!</a>
                          </figcaption>
                        </figure>
                      </li>

                      <li class="item col-sm-6 col-xs-12">
                        <figure>
                          <img src="Imagem/Cidades/payon-city.jpg"  alt="This is my work" class="img-responsive" />
                          <figcaption class="caption">
                            <div class="photo-details">
                              <h4>Cidade de Payon</h4>
                              <span>Fica na floresta perdida.</span>
                            </div>
                            <a href="#project2" class="view">INFO</a>
                            <a href="#project2" class="view">Entrar!</a>
                          </figcaption>
                        </figure>
                      </li>

                      <li class="item col-sm-6 col-xs-12">
                        <figure>
                          <img src="Imagem/Cidades/desert-city.jpg"  alt="This is my work" class="img-responsive" />
                          <figcaption class="caption">
                            <div class="photo-details">
                              <h4>Cidade de Morroc</h4>
                              <span>Deserto completo.</span>
                            </div>
                            <a href="#project3" class="view">INFO</a>
                            <a href="#project3" class="view">Entrar!</a>
                          </figcaption>
                        </figure>
                      </li>

                      <li class="item col-sm-6 col-xs-12">
                        <figure>
                          <img src="Imagem/Cidades/alberta-city.jpg"  alt="This is my work" class="img-responsive" />
                          <figcaption class="caption">
                            <div class="photo-details">
                              <h4>Camera</h4>
                              <span>By Code Rare</span>
                            </div>
                            <a href="#project4" class="view">INFO</a>
                            <a href="#project4" class="view">Entrar!</a>
                          </figcaption>
                        </figure>
                      </li>

                      <li class="item col-sm-6 col-xs-12">
                        <figure>
                          <img src="Imagem/Cidades/morroc-city.jpg"  alt="This is my work" class="img-responsive" />
                          <figcaption class="caption">
                            <div class="photo-details">
                              <h4>Swordman lv: 60</h4>
                              <span>Swordman de Classe 3</span>
                            </div>
                            <a href="#project5" class="view">INFO</a>
                            <a href="#project5" class="view">Entrar!</a>
                          </figcaption>
                        </figure>
                      </li>

                      <li class="item col-sm-6 col-xs-12">
                        <figure>
                          <img src="Imagem/Cidades/phantom-city.jpg"  alt="This is my work" class="img img-responsive" />
                          <figcaption class="caption">
                            <div class="photo-details">
                              <h4>Food</h4>
                              <span>By Code Rare</span>
                            </div>
                            <a href="#project6" class="view">INFO</a>
                            <a href="#project6" class="view">Entrar!</a>

                          </figcaption>
                        </figure>
                      </li>
                    </ul>

                    <ul class="project_info">
                      <li id="project1">
                        <div class="project_content">
                          <h2>YOUR TITLE GOES HERE</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                        </div>
                      </li>

                      <li id="project2">
                        <div class="project_content">
                          <h2>YOUR TITLE GOES HERE</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                        </div>
                      </li>

                      <li id="project3">
                        <div class="project_content">
                          <h2>YOUR TITLE GOES HERE</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                        </div>
                      </li>

                      <li id="project4">
                        <div class="project_content">
                          <h2>YOUR TITLE GOES HERE</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                        </div>
                      </li>

                      <li id="project5">
                        <div class="project_content">
                          <h2>YOUR TITLE GOES HERE</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                        </div>
                      </li>

                      <li id="project6">
                        <div class="project_content">
                          <h2>YOUR TITLE GOES HERE</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?
                          </p>
                        </div>
                      </li>
                    </ul>
        </div>             

        <!-- ###################### off: PERSONAGENS ANTIGO ########################## -->          

        <div id="contact" class="row">


                     <!-- <h2 style="color:purple;">Evoluções <strong>Swordman</strong>, no geral.</h2>
                      <p style="color:black;">Todas as evoluções e skills da classe Swordman em todo o andamento do jogo. </p>

                    <div class="row">
                        <span class="col-sm-6 col-xs-12">
                          <img src="Imagem/classes/swordman-01.png"  alt="This is my work" class="img-responsive" width="215" height="345"/>
                        </span>
                        <span class="col-sm-6 col-xs-12">
                          <img src="Imagem/classes/swordman-02.png"  alt="This is my work" class="img-responsive" width="265" height="345"/>
                        </span>
                        <span class="col-sm-6 col-xs-12">
                          <img src="Imagem/classes/swordman-03.png"  alt="This is my work" class="img-responsive" width="265" height="345"/>
                        </span>
                        <span class="col-sm-6 col-xs-12">
                          <img src="Imagem/classes/swordman-04.png"  alt="This is my work" class="img-responsive" width="265" height="345"/>
                        </span>
                      </div>

                      <address class="row">
                        <span class="col-sm-6 col-xs-12">
                          <i class="ion-location"></i>
                          1355 Market Street, Suite 900
                          San Francisco, CA 94103
                        </span>
                        <span class="col-sm-6 col-xs-12">
                          <i class="ion-ios-telephone"></i>
                          (123) 456-7890
                        </span>
                        <span class="col-sm-6 col-xs-12">
                          <i class="ion-email"></i>
                          hello@Code Rarecom
                        </span>
                      </address>

                     <!-- <form id="contact_form" class="row" method="post" action="php/mailer.php">
                        <div class="col-sm-6 col-xs-12">
                          <input type="name" name="name" class="input-name" placeholder="Name">
                          <input type="email" name="email" class="input-email" placeholder="Email">
                        </div>

                        <div class="col-sm-6 col-xs-12">
                          <textarea name="message" class="input-message" placeholder="Message"></textarea>
                        </div>

                        <div class="col-sm-12 col-xs-12">
                          <button class="submit">Send</button>
                        </div>

                        <div id="form-messages" class="col-sm-12 col-xs-12">
                          <span class="success col-sm-12 col-xs-12"></span>
                          <span class="error col-sm-12 col-xs-12"></span>
                        </div>
                      </form> -->
        </div> 

        <!-- ###################### 05: FOOTER ########################## -->            

        <footer>
                    <p class="uppercase">RPG © JhinDickson<i class="ion-heart"></i></p>
                    <div class="drag">
                      <i class="up ion-arrow-up-c"></i>
                    </div>
                  </footer>

</div>
</section>
    
      <!-- Javascript -->
      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/animsition.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/twitterFetcher_min.js"></script>
      <script src="js/masonry.pkgd.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/photoswipe.min.js"></script>
      <script src="js/photoswipe-ui-default.min.js"></script>
      <script src="js/jqinstapics.min.js"></script>
      <script src="js/script.js"></script>
</body>
</html>
