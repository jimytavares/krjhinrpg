<!DOCTYPE html>

<html>
    
    <?php include ('.globals/header.php'); ?>
        
<body class="">
    
    <!---- NavBar: Menu ---->
    <nav>
        <div class="row">
            
            <div class="col-md-auto">
                <div class="nav flex-column nav-pills menu-all" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="position:fixed; z-index:1;">
                  
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <i class="fas fa-home"></i> </a>
                   
                    <div class="dropright">
                        <a class="nav-link dropdown-toggle" id="v-pills-home-tab" data-toggle="dropdown" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> 
                                <i class="fas fa-user"></i> 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"> <strong>Nome:</strong> <?php echo $_SESSION['usuario'] ?> </a>
                            <a class="dropdown-item" href="#"> <img src="Imagem/gold2.png" /> <strong>Gold:</strong> <?php echo ($object->gold) ?> </a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    
                    <div class="dropright">
                        <a class="nav-link dropdown-toggle" id="v-pills-home-tab" data-toggle="dropdown" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true"> 
                                <i class="fas fa-box-open"></i> 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Itens</a>
                            <a class="dropdown-item" href="#">Armars</a>
                            <a class="dropdown-item" href="#"> <i class="fas fa-tshirt"></i> Equipamentos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    
                  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"> <i class="fas fa-cogs"></i> </a>
                  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"> <i class="fas fa-sign-out-alt"></i> </a>
                </div>
            </div>
            <div class="col" id="box-col2-menu">
              
            </div>
            
        </div>
    </nav>
    
    <!-- SECTION 01: Menu Geral ---->
    <section style="margin-top:-51px;">
    
        <div class="row">
            <div class="col-5 left_degrad">
            </div>
            <div class="col-7">
                
                <div class="row" style="margin-top:20px; margin-bottom:50px; width:98%; margin-left:2px;">
                    <div class="col creat_button" data-target="#statusModal" data-toggle="modal">
                        <i class="fas fa-heart" style="font-size:37px; margin-top:27px; color:red;"></i>
                        <h6>STATUS</h6>
                    </div>
                    <div class="col creat_button" data-target="#itensModal" data-toggle="modal">
                        <i class="fas fa-flask" style="font-size:37px; margin-top:27px; color:#ff00ff;"></i>
                        <h6>ITENS</h6>
                    </div>
                    <div class="col creat_button" data-target="#skillsModal" data-toggle="modal">
                        <i class="fas fa-tint" style="font-size:37px; margin-top:27px; color:#4d4dff;"></i>
                        <h6>SKILL'S</h6>
                    </div>
                    <div class="col creat_button" data-target="#codigosModal" data-toggle="modal">
                        <i class="fas fa-code" style="font-size:37px; margin-top:27px;"></i>
                        <h6>CÓDIGOS</h6>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- MODAL: Status -->
            <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-street-view" style="font-size:25px; color:purple;"></i> <?php echo ($object->nome); ?> <i class="fas fa-heart" style="font-size:18px; margin-top:27px; color:; margin-left:80px;"></i> Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                  </div>
                </div>
              </div>
            </div>
        
        <!-- MODAL: Itens -->
            <div class="modal fade" id="itensModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-khanda"></i> ITENS </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                  </div>
                </div>
              </div>
            </div>
        
        <!-- MODAL: Skills -->
            <div class="modal fade" id="skillsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-fill-drip"></i> Skill's </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                  </div>
                </div>
              </div>
            </div>
        
        <!-- MODAL: Codigos -->
            <div class="modal fade" id="codigosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fab fa-strava" style="font-size:25px;"></i> Códigos </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                  </div>
                </div>
              </div>
            </div>
        
    </section>
    
    <!-- SECTION 02:  Personagem ---->
    <section>
        
        <div class="row">
            
            <div class="col-5" style="background-image: linear-gradient(to right, #7253C3 , #AE4AC7);">
                a
            </div>
            
            <div class="col-7 col_char">
                
                <div style="margin-bottom: 50px; width:97%;">

                          <h2 style="text-align:center; color: white;"><b><?php echo ($object->nome); ?></b></h2>

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

                        EXP: 60% / 20% / 20%
                    
                        <div class="progress">
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

                    <!---- MODAL: Status ---->

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
                
            </div>
            
        </div>
        
    </section>
    
    <!-- SECTION 03: status ---->
    <section>
        
        <div class="row">
            <div class="col-5" style="background-image: linear-gradient(to right, #7253C3 , #AE4AC7);">
            </div>
            <div class="col-7" style="background-color:;">
                
                <h6 style="margin-top:30px; text-align:center;">Testando Status dos PErsonagens</h6>
                
                <div class="row" style="margin-top: 50px; width:93%; margin-left: 25px;">
                    <div class="col box_status">
                        <i class="fab fa-studiovinari"></i> Classe <br/> <?php echo ($object->classe); ?>
                    </div>
                    <div class="col box_status">
                        <i class="fas fa-street-view"></i> Ataque <br/> <?php echo ($object->atk); ?>
                    </div>
                    <div class="col box_status">
                        <i class="fas fa-shield-alt"></i> Defesa <br/> <?php echo ($object->def); ?>
                    </div>
                    <div class="col box_status">
                        <i class="fas fa-magic"></i> Mage <br/> <?php echo ($object->magia); ?>
                    </div>
                </div>
                
                <div class="row" style="margin-top: 50px; width:93%; margin-left: 25px;">
                    <div class="col box_status">
                        <i class="fas fa-street-view"></i> Gold <br/> <?php echo ($object->gold); ?>
                    </div>
                    <div class="col box_status">
                        <i class="fas fa-street-view"></i> Cash <br/> <?php echo ($object->cash); ?>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
    
    <!-- SECTION 04: ---->
    <section></section>
    
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
    
</body>