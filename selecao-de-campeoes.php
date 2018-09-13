<!DOCTYPE HTML>
<html>

    <?php include ('.globals/header.php'); ?>
    
<body class="body-selecao">
    
    <!-- Section 01: Menu -->
    <section>
        
        <div class="row" id="row-menu">
            <div class="col">
                <img src="img/favicon-72.png"/>
            </div>
            <div class="col">
                a
            </div>
            <div class="col" id="col-menu-button-selecao">
                
                <div class="btn-group">
                  <button type="button" class="btn btn-outline-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> Account
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"> <i class="fa fa-user"></i> <b>User:</b> <?php echo $_SESSION['usuario'] ?> </a>
                    <a class="dropdown-item" href="#" style="color:#b3b300;"> <img src="Imagem/gold2.png" /> Gold: <?php echo ($object->gold) ?> </a>
                    <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Configurações</a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="logout-login.php"> <i class="fa fa-sign-out" style="font-size:px;"></i> Deslogar!</a>
                  </div>
                </div>

                <a href="logout-login.php" class="btn btn-outline-light btn-sm"> <i class="fa fa-sign-out" style="font-size:px;"></i>Logout! </a>
            </div>
        </div>
        
    </section>
    
    <!-- Section 02: Title -->
    <section>
        
        <div class="container alert alert-success alert-dismissible fade show" style="margin-top:30px;" role="alert">
          <strong>Champion Select!</strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
    </section>
     
    <!-- Section 03: Characters -->
    <section>
        
        <!-- Guerreiro -->
        <div class="row" id="box-character-principal">
            <div class="col">
            </div>
            <div class="col">
                <div class="card-box" style="width: 18rem; border-radius:10px;">
                    <div class="row">
                        <div class="col-4">
                            <img src="Imagem/perso/lvs/guerreiro.gif" />
                        </div>
                        <div class="col-8">
                            <p style="color:white; font-size:25px; font-family: 'Times New Roman', Times, serif;"><i class="fas fa-spa" id="icon-rotate"></i> Hight Lord</p>
                            <button type="button" class="btn btn-info" data-target="#collapseguerreiro" data-toggle="collapse" > <i class="fab fa-linode"></i> Info! </button>
                            <a href="RPG-Swordman.php" > <button type="button" class="btn btn-outline-light"> Play</button> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
            </div>
        </div>
        
        <!-- Linha: Personagens -->
        <div class="row container" id="box-characters3">
            
            <!-- Wizzard -->
            <div class="col">
                <div class="card-box" style="width: 18rem; background-color:darkslategray;">
                    <div class="row">
                        <div class="col-4">
                            <img src="Imagem/perso/lvs/wizard.gif" />
                        </div>
                        <div class="col-8">
                            <p style="color:white; font-size:25px; font-family: 'Times New Roman', Times, serif;">  Wi <i class="fab fa-ethereum" id="icon-wizzard"></i> zzard</p>
                            <button type="button" class="btn btn-info button-play" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" disabled> <i class="fab fa-linode"></i> Info!</button>
                            <a href="" > <button type="button" class="btn btn-outline-success" disabled> Play</button> </a>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Sacerdote -->
            <div class="col">
                <div class="card-box" style="width: 18rem; background-color:#4d4d4d;">
                    <div class="row">
                        <div class="col-4">
                            <img src="Imagem/perso/lvs/sumoSacer.gif" />
                        </div>
                        <div class="col-8">
                            <p style="color:white; font-size:25px; font-family: 'Times New Roman', Times, serif;"> <i class="fab fa-fulcrum" id="icon-sacer"></i> Priest </p>
                            <button type="button" class="btn btn-info button-play" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" disabled> <i class="fab fa-linode"></i> Info!</button>
                            <a href="" > <button type="button" class="btn btn-outline-success" disabled> Play</button> </a>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Monk -->
            <div class="col">
                <div class="card-box" style="width: 18rem; background-color: saddlebrown;">
                    <div class="row">
                        <div class="col-4">
                            <img src="Imagem/perso/lvs/monkei.gif" />
                        </div>
                        <div class="col-8">
                            <p style="color:white; font-size:25px; font-family: 'Times New Roman', Times, serif;"> M <i class="fab fa-cloudsmith" id="icon-monk"></i> nk </p>
                            <button type="button" class="btn btn-info button-play" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" disabled> <i class="fab fa-linode"></i> Info!</button>
                            <a href="" > <button type="button" class="btn btn-outline-success" disabled> Play</button> </a>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
        
        
        <!-- Collapse dos Personagens -->
        
            <!-- Collapse: Guerreiro -->
            <div class="collapse" id="collapseguerreiro">
              
                <div class="container">
                
                    <div class="row" style="margin-top:50px;">
                        <div class="col">
                              <img src="Imagem/champion-select/Personagens.png"  style="width:500px;"/>    
                        </div>
                        <div class="col" style="margin-top:50px;">
                              <div class="card card-body">
                                
                                <div class="card" style="width: 18rem; margin-left:19%;">
                                  <div class="card-body">
                                    <h3 class="card-title">Cavaleiro Rúnico</h3>
                                      <p style="color:gray;">Espadachim / Cavaleiro / Lorde / Cavaleiro Rúnico</p>
                                  </div>
                                  <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Max.Lével: 100</li>
                                    <li class="list-group-item">Sub-Classes: 4</li>
                                    <li class="list-group-item">Armas: <img src="Imagem/armas/arma-guerreiro.png" style="width:250px;"/> </li>
                                  </ul>
                                </div>
                                  
                                <p style="margin-top:20px;">Em RPGjhin, você sempre começa com um personagem de primeira classe e vai evoluindo. É possível escolher sua classe e evoluções, montar sua própria árvore de habilidades e definir o seu estilo de luta! </p>
                                  
                              </div>
                        </div>
                    </div>
                
                </div>
                
            </div>
        
        
    </section>
    

    
    <!-- Personagens antigos 
    <section>
        
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
                    <a href="#" class="btn btn-danger disabled">Escolher</a>
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
                    <a href="#" class="btn btn-danger disabled">Escolher</a>
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
                    <a href="#" class="btn btn-danger disabled">Escolher</a>
                    <a href="#" class="btn btn-outline-info">Info!</a>
                  </div>
                </div>
            </div>
        </div>  

        <div class="row" id="row-geral2">
            <div class="col">

                <div class="card-background" style="width: 18rem;">
                  <img src="Imagem/perso/lvs/arcebispo.png" style="padding-left:10px;"/>
                  <div class="card-body">
                    <h5 class="card-title"><b>Arcebispo</b></h5>
                    <p class="card-text">Classe: Sacerdote <br/> Max.Level: 100 <br/> Sub Classes: 3 <br/> </p>
                    <a href="RPG-Swordman.php" class="btn btn-danger disabled">Escolher</a>
                    <a href="#" class="btn btn-outline-info">Info!</a>
                  </div>
                </div>

            </div>
            <div class="col">
                <div class="card-background" style="width: 18rem;">
                  <img src="Imagem/perso/lvs/monge-ult.gif" style="padding-left:10px;"/>
                  <div class="card-body">
                    <h5 class="card-title">Monge</h5>
                    <p class="card-text"> <b>Classe:</b> Monge <br/> <b>Max Level:</b> 100 <br/> <b>Sub Classes:</b> 3  </p>
                    <a href="#" class="btn btn-danger disabled">Escolher</a>
                    <a href="#" class="btn btn-outline-info">Info!</a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card-background" style="width: 18rem;">
                  <img src="Imagem/perso/lvs/Sephiroth.gif" style="padding-left:10px;"/>
                  <div class="card-body">
                    <h5 class="card-title">Guardião Real</h5>
                    <p class="card-text"> <b>Classe:</b> Espadachim <br/> <b>Max Level:</b> 100 <br/> <b>Sub Classes:</b> 3 </p>
                    <a href="#" class="btn btn-danger disabled">Escolher</a>
                    <a href="#" class="btn btn-outline-info">Info!</a>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card-background" style="width: 18rem;">
                  <img src="Imagem/perso/lvs/ceifador.gif" style="padding-left:10px;"/>
                  <div class="card-body">
                    <h5 class="card-title">Ceifador</h5>
                    <p class="card-text"> <b>Classe:</b> Ceifador <br/> <b>Max Level:</b> 100 <br/> <b>Sub Classes:</b> 2 </p>
                    <a href="#" class="btn btn-danger disabled">Escolher</a>
                    <a href="#" class="btn btn-outline-info">Info!</a>
                  </div>
                </div>
            </div>
        </div> 
        
    </section>   
    -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>