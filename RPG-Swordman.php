<!DOCTYPE html>
<html>

<?php include ('.globals/header.php'); $page_name = "Lua Sangrentae"?>
    
<body style="background-image: url('Imagem/img245.jpg'); background-size: cover;">
    
    <?php include ('.globals/nav-menu.php'); ?>
    
    <!-- Menu: page -->
    <section>
        <div id="home" >
          
                <div class="">
                        <div class="row menu-row-icons">
                            <div class="col-md-auto">
                                <button class="btn creat_button creat_button_status" style="width:200px;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> 
                                    <i class="fas fa-heart" style="font-size:25px;"></i> STATUS
                                </button>
                            </div>
                            <div class="col-md-auto" style="margin-left:10px;">
                                <button class="btn creat_button creat_button_itens" style="width:200px;" data-target="#itensModal" data-toggle="modal"> 
                                    <i class="fas fa-flask" style="font-size:25px; color:#ff00ff;"></i> ITENS
                                </button>
                            </div>
                            <div class="col-md-auto" style="margin-left:10px;" data-target="#skillsModal" data-toggle="modal">
                                <button class="btn creat_button creat_button_skill" style="width:200px;" data-target="#itensModal" data-toggle="modal"> 
                                    <i class="fas fa-tint" style="font-size:25px;"></i> SKILL'S
                                </button>
                            </div>
                            <div class="col-md-auto" style="margin-left:10px;">
                                <button class="btn creat_button creat_button_codigos" style="width:200px;" data-target="#itensModal" data-toggle="modal"> 
                                    <i class="fas fa-code" style="font-size:27px;"></i> CODIGOS
                                </button>
                            </div>
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
    </section>
    
    <!-- Player / Bar / Status -->
    <section class="collapse show" id="collapseExample" style="margin-top:150px;">
        
        <div class="row" style="width:80%; margin-left:10%; margin-top:-8%;  height:250px; position:; z-index:1;">
            <div class="col" style="background-color:#d8514b;">
                <p style="text-align:center; color: white;"> <i class="fas fa-male"></i> <?php echo ($object->nome); ?> </p>
                <img src="Imagem/perso/lvs/guerreiro-lv30.gif" style="margin-left:35%; margin-top: 30px;"/>
            </div>
            <div class="col" style="background-color:#68ad5d; margin-left:15px;">
                <p style="text-align:center; color:white;"> <i class="fas fa-sliders-h"></i> Status</p>
                <div class="" style="margin-top:40px;">
                    HP: 300/<?php echo ($object->hp); ?>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    MP: 245/300
                    <div class="progress">
                        <div class="progress-bar bg-info bg-info" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    EXP: 80%
                    <div class="progress">
                        <div class="progress-bar bg-warning bg-info" role="progressbar" style="width: 80%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                    
                </div>
                
            </div>
            <div class="col" style="background-color:#0182c4; margin-left:15px;">
                
                <p style="text-align:center; color:white;"> <i class="fas fa-sliders-h"></i> Status</p>
                
                <div class="row" style="margin-top:50px;">
                    <div class="col">
                        <p> <i class="fa fa-arrow-up" style="color: #33ff33; font-size: 20px;"></i> <strong>Level:</strong> <?php echo ($object->lv); ?></p>
                    </div>
                    <div class="col">
                        <p> <i class="fab fa-optin-monster" style="color: orange; font-size: 20px;"></i> <strong> <?php echo ($object->classe); ?> </strong> </p>
                    </div>
                    <div class="col">
                        <p>City: <?php echo $page_name; ?> </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <p> <img src="Imagem/gold2.png" style="width:35px; height:30px;"/> <strong>Gold:</strong> <?php echo ($object->gold); ?> </p>
                    </div>
                    <div class="col">
                        <p> <img src="Imagem/itens/ticket-teleporte.png" style="width:35px; height:35px;"/> <strong>Ticket:</strong> <?php echo $object->ticket ?> </p>
                        <button type="button" class="btn btn-success btn-sm"> <i class="fas fa-dollar-sign"></i> Comprar</button>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
    
    <!-- 4'NPC -->
    <section style="margin-top:70px;">
        
        <div class="container">
            
            <div class="row" style="background-image: url('Imagem/Cidades/city-lua-sangrenta2.jpg'); border-radius:10px;">
                <div class="col" style="text-align:center; margin-top: 20px;">
                    
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <strong>Lua Sangrenta!</strong> Bem vindo a cidade da lua sangrenta, area destinada a principais informações.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <strong>Noticias!</strong> Evento dia 00/00 itens escondidos pela cidade e dobro de gold.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <strong>NPC!</strong> Informações da cidade, criações e compra de poções, ferreiro e muito mais.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      <strong>Teletrnasporte!</strong> Você pode usar a area de teletransporte pagando em gold ou cash.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                </div>
                <div class="col">
                    <img src="Imagem/npc/npc-info.gif" alt="This is my work" class="img-responsive" style="width:65px;margin-top:-15px;"/>
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#npcguarda" style="width:80%; margin-left:10px;">Guarda</button>

                    <img src="Imagem/npc/npc-fernanda.gif" alt="This is my work" class="img-responsive" />
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#npcporcao" style="width:80%; margin-left:12px;"> <i class="fas fa-bong" style="color:; font-size:20px;"></i> Porções</button>

                    <img src="Imagem/npc/npc-ralph-pronteira.gif" alt="This is my work" class="img-responsive" />
                    <button type="button" class="btn btn-primary" style="width:80%; margin-left:16px;">teste</button>

                    <img src="Imagem/npc/npc-mercador-pronteira.gif" alt="This is my work" class="img-responsive" style="margin-top:-17px;"/>
                    <button type="button" class="btn btn-primary" style="width:80%; margin-left:-6px;">teste1</button>
                </div>
            </div>
            s
        </div>
        
        <!-- ####### MODAL ######### -->
        
            <!-- ####### GUARDA ######### -->
            <div class="modal fade bd-example-modal-lg" id="npcguarda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background-color:transparent;">
                    
                      <div class="alert alert-danger" role="alert">
                          
                            <div class="row">
                                <div class="col">
                                    <h4 class="alert-heading">Bem Vindo a Cidade da Lua Sangrenta!</h4> 
                                </div>
                                <div class="col">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="color:Red; font-size:40px;">&times;</span>
                                    </button>
                                </div>
                            </div>
                          
                          
                          <p>A cidade que surgiu depois do primeiro eclipse lunar anos luz atras, cidade rica em croação e vemda de poções, livros e informações secretas onde magos e assassinos exploram e usufriem dos recursos da cidade.</p>
                          <hr>
                          
                            <img src="Imagem/Cidades/city-lua-sangrenta.jpg" style="width:600px; margin-left:60px; border-radius:10px;"/>
                          
                         <img src="Imagem/npc/npc-info.gif" alt="This is my work" class="img-responsive" style="width:65px; margin-left:45%;"/>
                          
                          <p class="mb-0" style="text-align:center;">Contas com essa Classe tem acesso free à cidade.</p>
                          
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:200px;">Sair</button>
                          </div>

                      </div>
                    
                </div>
              </div>
            </div>
        
            <!-- ####### POTION'S ######### -->
            <div class="modal fade bd-example-modal-lg" id="npcporcao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kafra Potions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        
                      
                        <!-- HP -->
                        <h3 style="text-align:center;">Porções de Vida/HP</h3>
                        <div class="row">
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-hp-1.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 1</strong> <br/>
                                        Recupera 100<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-hp-2.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 2</strong> <br/>
                                        Recupera 300<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-hp-3.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 3</strong> <br/>
                                        Recupera 900<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                      
                      
                        <!-- MANA -->
                        <br/><h3 style="text-align:center;">Porções de Mana</h3>
                        <div class="row" style="margin-top:25px;">
                            
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-mana-1.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 1</strong> <br/>
                                        Recupera x<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-mana-2.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 2</strong> <br/>
                                        Recupera x<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-mana-3.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 3</strong> <br/>
                                        Recupera x<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                      
                      <!-- EXP -->
                        <br/><h3 style="text-align:center;"> <i class="fas fa-angle-double-up"></i> Porções de EXP</h3>
                        <div class="row" style="margin-top:25px;">
                            
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-exp-1.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 1</strong> <br/>
                                        Recupera x<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-exp-2.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 2</strong> <br/>
                                        Recupera x<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col">
                                
                                <div class="row">
                                    <div class="col">
                                        <img src="Imagem/itens/potion-exp-3.png" style="width:100px; border-radius:10px;"/>
                                    </div>
                                    <div class="col">
                                        <p><strong>Porção Nv 3</strong> <br/>
                                        Recupera x<br/>
                                        Gold: x</p>
                                        <button type="button" class="btn btn-success">Comprar</button>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                      
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                  </div>
                </div>
              </div>
            </div>
        
    </section>
    
    <!-- Blacksmith/Ferreiro -->
    <section>
        
        <div class="" style="background-image: url('Imagem/Cidades/city-lua-sangrenta2.jpg'); width:70%; margin-left: 16%; border-radius:10px;">
            
            <div class="row" style="padding-top: 30px;">
                <div class="col" style="text-align:center;">

                    <img src="Imagem/npc/npc-arma-pronteira.gif" style="width:90px;"/>

                </div>
                <div class="col">
                    
                    <p style="color:#0778DC;font-size:20px;text-align:center;">Junior Blacksmith</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-outline-success"> <i class="fas fa-gavel"></i> Armas</button>
                      <button type="button" class="btn btn-outline-danger"> <i class="fab fa-pied-piper-hat"></i> Armadura</button>
                      <button type="button" class="btn btn-outline-primary"> <i class="fab fa-gitlab"></i> Aprimoramento</button>
                    </div>
                    
                </div>
                <div class="col">

                    <ul class="list-group" style="margin-right:10px;">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Armas Quebradas
                        <span class="badge badge-primary badge-pill">14</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Armadura 
                        <span class="badge badge-primary badge-pill">2</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dividas
                        <span class="badge badge-primary badge-pill">1</span>
                      </li>
                    </ul>

                </div>
            </div>
            a
        </div>
        
    </section>
    
    <!-- Teleporte: Map's -->
    <section>
        
        <div class="row" style="margin-top:60px; margin-left:20px;">
            <div class="col-md-auto">
                <img src="Imagem/Cidades/aldebaran-city.jpg" style="width:400px; height:200px;" alt="This is my work" class="" />
                <div class="row">
                    <div class="col">
                        <h5>Aldebaran City</h5>
                    </div>
                    <div class="col-md-auto">
                        <p>Meio de pagamento para o <br/>dteletransporte.</p>
                        <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn"><i class="fas fa-ticket-alt"></i> Ticket</button>
                        <button type="button" class="btn btn-warning btn"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <img src="Imagem/Cidades/payon-city.jpg" style="width:400px; height:200px;" alt="This is my work" class="" />
                <div class="row">
                    <div class="col">
                        <h5>Aldebaran City</h5>
                    </div>
                    <div class="col-md-auto">
                        <p>Meio de pagamento para o <br/>dteletransporte.</p>
                        <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn"><i class="fas fa-ticket-alt"></i> Ticket</button>
                        <button type="button" class="btn btn-warning btn"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <img src="Imagem/Cidades/desert-city.jpg" style="width:400px; height:200px;" alt="This is my work" class="" />
                <div class="row">
                    <div class="col">
                        <h5>Aldebaran City</h5>
                    </div>
                    <div class="col-md-auto">
                        <p>Meio de pagamento para o <br/>dteletransporte.</p>
                        <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn"><i class="fas fa-ticket-alt"></i> Ticket</button>
                        <button type="button" class="btn btn-warning btn"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                    </div>
                </div>
            </div>
            <div class="w-100" style="margin-top:30px;"></div>
            <div class="col-md-auto">
                <img src="Imagem/Cidades/alberta-city.jpg" style="width:400px; height:200px;" alt="This is my work" class="" />
                <div class="row">
                    <div class="col">
                        <h5>Aldebaran City</h5>
                    </div>
                    <div class="col-md-auto">
                        <p>Meio de pagamento para o <br/>dteletransporte.</p>
                        <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn"><i class="fas fa-ticket-alt"></i> Ticket</button>
                        <button type="button" class="btn btn-warning btn"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <img src="Imagem/Cidades/morroc-city.jpg" style="width:400px; height:200px;" alt="This is my work" class="" />
                <div class="row">
                    <div class="col">
                        <h5>Aldebaran City</h5>
                    </div>
                    <div class="col-md-auto">
                        <p>Meio de pagamento para o <br/>dteletransporte.</p>
                        <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn"><i class="fas fa-ticket-alt"></i> Ticket</button>
                        <button type="button" class="btn btn-warning btn"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-auto">
                <img src="Imagem/Cidades/phantom-city.jpg" style="width:400px; height:200px;" alt="This is my work" class="" />
                <div class="row">
                    <div class="col">
                        <h5>Aldebaran City</h5>
                    </div>
                    <div class="col-md-auto">
                        <p>Meio de pagamento para o <br/>dteletransporte.</p>
                        <a href="cidade-aldebaran.php"> <button type="button" class="btn btn-primary btn"><i class="fas fa-ticket-alt"></i> Ticket</button>
                        <button type="button" class="btn btn-warning btn"> <i class="fas fa-dollar-sign"></i> GOLD!</button> </a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    

    
    
    
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
    
</body>
</html>
