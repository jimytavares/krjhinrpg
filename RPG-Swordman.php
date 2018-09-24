<!DOCTYPE html>
<html>
<head>
    
    <?php  
        session_start();  
    
        if(!isset ($_SESSION['logado']) or !$_SESSION['logado'] )
        {
            header('location:index.php');
        }

            require_once("database/Connection.class.php");

            $conn = Connection::get()->connect();
            $sql= "SELECT * FROM personagem;";

            $sth = $conn->prepare($sql);

            if ($sth->execute()) 
            {
                $result = $sth->fetchAll(PDO::FETCH_OBJ);
                $object = '';

                foreach ($result as $row) 
                {
                    $object = $row;
                }
            }

            $object->nome;
            $object->classe;
            $object->lv;
            $object->ticket;
            $object->hp;
            $object->mp;
            $object->exp;
            $object->atk;
            $object->def;
            $object->magia;
            $object->gold;
            $object->cash

            /*var_dump($object->level);

            $sql= "SELECT * FROM cash";

            $sth = $conn->prepare($sql);

            if ($sth->execute()) 
            {
                $result = $sth->fetchAll(PDO::FETCH_OBJ);
                $object2 = '';
                foreach ($result as $row) 
                {
                    $object2 = $row;
                }
            }

            $object2->gold;
            $object2->rop; */
    ?>    

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--  Meu CSS -->
    <link href="css/rpg-swordman.css" rel="stylesheet" type="text/css" media="all"/>

    <style>
        #menu-action{
            background-color: #121619 !important;
            height: 40px;
        }
        #input-menu {
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
        #button-logout{
            margin-top: 3px;
        }
    </style>    
        
</head>
<body>
    
<section class="animsition">

    <div id="leftSide" class="gradient" style="background-image: url('Imagem/fundo01.jpg') !important;">
        <div id="home" >

                <div class="row" id="menu-action">
                    <div class="col" style="margin-top:3px;">
                        <button type="button" class="btn btn-outline-warning btn-sm" id="button-logout"> <i class="fab fa-fort-awesome-alt" style="font-size:15px;"></i> Loja</button>
                        <button type="button" class="btn btn-outline-info btn-sm" id="button-logout" data-toggle="modal" data-target="#modalatualizacoes"> <i class="fa fa-book"></i> Atualizações</button>
                        <a class="" href="logout-login.php"> <button type="button" class="btn btn-outline-danger btn-sm" id="button-logout"> <i class="fas fa-sign-out-alt"></i> Deslogar!</button> </a>
                    </div>
                    <div class="col" style="margin-top:4px; text-align: right;">
                            <form action="" method="post">
                                <i class="fab fa-mandalorian" style="font-size:25px; color:yellow;"></i>
                                <input type="text" name="valor" id="input-menu" value="">
                                <button class="buttonA buttonA1 btn btn-outline-info">.</button>
                            </form>
                    </div>
                </div>

                <!-- ####### MODAL: Missões ######### -->
                    <div id="trogglemissoes" class="collapse" style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; padding-left:55px;">
                    <br/><br/>   
                            <table class="table table-dark" style="width:80%; text-align:center;">
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

                <!-- ####### MODAL: Atualizações ######### -->
                    <div class="modal fade" id="modalatualizacoes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"> <h3>Atualizações</h3> 2018.06.25</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                          </div>
                        </div>
                      </div>
                    </div>

                <!---- Caminho Fogo ou Gelo ---->
                <?php include ('inc/caminho-aldebaran.php'); ?>

                <!-- <ul class="social_icons">
                  <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
                </ul> -->

        </div>
    </div>

    <div id="rightSide">


            <!-- ################### 01: PERFIL ########################### -->

            <div id="subscribe">

                          <h1 style="text-align:center; color: white;"><b><?php echo ($object->nome); ?></b></h1>

                          <div class="row">
                              <div class="feature col-sm-3 col-xs-3" data-toggle="modal" data-target=".bd-example-modal-lg" style="text-align:center;">
                                <i class="ion-heart" style="font-size:39px;"></i>
                                <h6>STATUS</h6>
                              </div>

                              <div class="feature col-sm-3 col-xs-3" style="text-align:center;">
                                <i class="ion-erlenmeyer-flask" style="font-size:39px;"></i>
                                <h6>ITENS</h6>
                              </div>

                              <div class="feature col-sm-3 col-xs-3" style="text-align:center;">
                                <i class="ion-waterdrop" style="font-size:39px;"></i>
                                <h6>SKILL'S</h6>
                              </div>

                              <div class="feature col-sm-3 col-xs-3" style="text-align:center;">
                                <i class="ion-code" style="font-size:39px;"></i>
                                <h6>CÓDIGOS</h6>
                              </div>
                            </div>

                            <br/>

                            <div class="row" style="text-align:center;">
                                <div class="col">
                                    <img src="Imagem/perso/lvs/guerreiro-lv30.gif" style="width: 120px; height: 140px; text-align:right;"/>
                                </div>
                                <div class="col" style="text-align: left;">
                                    <p> <i class="fab fa-optin-monster" style="color: red; font-size: 24px;"></i> <?php echo ($object->classe); ?> </p>
                                    <p> <img src="Imagem/gold2.png" /> Gold: <?php echo ($object->gold); ?> </p>
                                    <p> <img src="Imagem/itens/ticket-teleporte.png" style="width:35px; height:35px;"/> Ticket: <?php echo $object->ticket ?> <button type="button" class="btn btn-outline-success btn-sm">Comprar</button> </p>
                                    <p> <i class="fa fa-arrow-up" style="color: #33ff33; font-size: 25px;"></i> Level: <?php echo ($object->lv); ?></p>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col">
                                HP: 300/<?php echo ($object->hp); ?>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                            </div> 
                            <div class="col">
                                MP: 245/300<div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                            </div>    
                        </div>

        EXP: 60% / 20% / 20%<div class="progress">
                              <div class="progress-bar progress-bar-success" role="progressbar" style="width:0%">
                                verde
                              </div>
                              <div class="progress-bar progress-bar-warning" role="progressbar" style="width:60%">
                                Experiência: 60%
                              </div>
                              <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
                                Dead: 20%
                              </div>
                            </div>

                    <!-- ********** MODAL: Status ********* -->

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

            </div>

            <!-- ################### 02: Menu de Ações ###################### -->            

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

            <!-- ################### 03: PREMIUM ################## -->

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

            <!-- ################### 04: Teleporte ########## --> 

            <div class="project">

                        <div class="row">
                            <div class="col">
                                <h1 style="text-align:right; padding-top:40px;">Teletransporte</h1>
                            </div>
                            <div class="col">
                                <img src="Imagem/portal2.gif" />
                            </div>
                        </div>

                        <p style="color: grey; text-align:center;">Para se teletransporta para outra cidade, você precisa de 1 ticket ou <br/> 100 de gold. Selecione a cidade e clique em "Entrar!".</p>


                        <ul class="gallery project_navigation">
                          <li class="item col-sm-6 col-xs-12">
                            <figure>
                              <img src="Imagem/Cidades/aldebaran-city.jpg" alt="This is my work" class="img-responsive" />
                              <figcaption class="caption">
                                <div class="photo-details">
                                  <h4>Al de Baran</h4>
                                  <span>Cidade das Magias</span>
                                </div>
                                <a href="#entraraldebaran" class="view">Entrar!</a>
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
                                  <h4>Cidade de Alberta</h4>
                                  <span>Porto</span>
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
                                  <h4>Cidade de Morroc</h4>
                                  <span>Inicio do Deserto</span>
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
                                  <h4>Cidade Fantasma</h4>
                                  <span>Ainda não registrado no mapa</span>
                                </div>
                                <a href="#project6" class="view">INFO</a>
                                <a href="#project6" class="view">Entrar!</a>

                              </figcaption>
                            </figure>
                          </li>
                        </ul>

                        <ul class="project_info">
                          <li id="entraraldebaran">
                            <div class="project_content">
                                <div class="row">
                                    <div class="col">
                                      <h2>AL DE BARAN</h2>
                                      <p>Cidade com 8 NPC's, cidade dos feiticeiros!</p>
                                    </div>    
                                    <div class="col">
                                      <p>Meio de pagamento para o teletransporte.</p>
                                      <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn-lg"><i class="fas fa-ticket-alt"></i> Ticket</button>
                                      <button type="button" class="btn btn-warning btn-lg"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                                    </div>    
                                </div>    
                            </div>
                          </li>

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

            <!-- ################### off: PERSONAGENS ANTIGO ############# -->          

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

            <!-- ################### 05: FOOTER ########################## -->            

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
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/masonry.pkgd.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/photoswipe.min.js"></script>
      <script src="js/photoswipe-ui-default.min.js"></script>
      <script src="js/jqinstapics.min.js"></script>
      <script src="js/script.js"></script>
    
</body>
</html>
