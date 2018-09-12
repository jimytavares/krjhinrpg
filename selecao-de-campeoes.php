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
                    Status
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"> <i class="fa fa-user"></i> <b>Conta:</b> <?php echo $_SESSION['usuario'] ?> </a>
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
        
        <div class="" style="margin-top:20px;">
            <h3>Seleção de Campeções</h3>
            <p>Selecione a classe que você quer iniciar sua aventura, apos escolher determinada classe <br/>todo o progesso que foi feito com ela será salvo. Você também pode jogar com mais de uma classe.</p>
        </div>
        
    </section>
     
    <!-- Section 03: Characters -->
    <section>
        
        <div class="container-fluid">
            <div class="row">
                
                <!-- Coluna Geral 01: Personagens -->
                <div class="col-5" id="col-01">
                    
                    <div class="box-characters">
                        
                        
                        <!-- ### Linha: Guerreiro & Wizzard ### -->
                        <div class="row" style="margin-top:60px;">
                            
                            <!-- Personagem 01: Guerreiro -->
                            <div class="col" style="margin-left:20px; text-align:center;">
                                
                                <img class="" src="Imagem/perso/lvs/guerreiro.gif" alt="" style="text-align:center;">
                                
                                <!-- Card Geral Branco: abaixo do personagem 01 -->
                                <div class="card" style="width: 18rem;">
                                  
                                  <h3>Hight Lord</h3>
                                    
                                  <div class="card-body">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Info!</button>
                                    <a href="RPG-Swordman.php" > <button type="button" class="btn btn-success">Jogar</button> </a>
                                  </div>
                                    
                                    <!-- Collapse Guerreiro, Personagem: 01 -->
                                    <div class="collapse" id="collapseExample">
                                        
                                      <div class="card" style="width: 18rem;">
                                          <div class="card-body">
                                            <h5 class="card-title">Sub-Classes</h5>
                                            <p class="card-text">Espadachim, Cavaleiro, Guerreiro e Hight Lord.</p>
                                          </div>
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Max.Lével: 100</li>
                                            <li class="list-group-item">Sub-Classes: 4</li>
                                            <li class="list-group-item">Armar: <img src="Imagem/armas/arma-guerreiro.png" style="width:260px;"/> </li>
                                          </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- Personagem 02: Wizzard -->
                            <div class="col" style="margin-left:20px; text-align:center;">
                                
                                <img class="" src="Imagem/perso/lvs/wizard.gif" alt="" style="text-align:center;">
                                
                                <!-- Card Geral Branco: abaixo do personagem 01 -->
                                <div class="card" style="width: 18rem;">
                                  
                                  <h3>Wizzard</h3>
                                    
                                  <div class="card-body">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#bruxocollapse" aria-expanded="false" aria-controls="collapseExample">Info!</button>
                                    <button type="button" class="btn btn-success">Jogar</button>
                                  </div>
                                    
                                    <!-- Collapse Guerreiro, Personagem: 01 -->
                                    <div class="collapse" id="bruxocollapse">
                                        
                                      <div class="card" style="width: 18rem;">
                                          <div class="card-body">
                                            <h5 class="card-title">Sub-Classes</h5>
                                            <p class="card-text">Mago, Feiticeiro, Bruxo e Hight Wizzard.</p>
                                          </div>
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Max.Lével: 100</li>
                                            <li class="list-group-item">Sub-Classes: 4</li>
                                            <li class="list-group-item">Armar: <img src="Imagem/armas/arma-wizzard.png" style="width:240px;"/> </li>
                                          </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <!-- ### Linha: Sacerdote & Monk ### -->
                        <div class="row" style="margin-top:60px; padding-bottom: 50px;">
                            
                            <!-- Personagem 03: Sacerdote -->
                            <div class="col" style="margin-left:20px;">
                                
                                <img class="" src="Imagem/perso/lvs/arcebispo.png" alt="">
                                
                                <!-- Card Geral Branco: abaixo do personagem 03 -->
                                <div class="card" style="width: 18rem;">
                                  
                                  <h3>Sacerdote</h3>
                                    
                                  <div class="card-body">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#sacerdotecollapse" aria-expanded="false" aria-controls="collapseExample">Info!</button>
                                    <button type="button" class="btn btn-success">Jogar</button>
                                  </div>
                                    
                                    <!-- Collapse Guerreiro, Personagem: 03 -->
                                    <div class="collapse" id="sacerdotecollapse">
                                        
                                      <div class="card" style="width: 18rem;">
                                          <div class="card-body">
                                            <h5 class="card-title">Sub-Classes</h5>
                                            <p class="card-text">Noviço, Sacerdote, Sumo Sacerdote e Arcebispo.</p>
                                          </div>
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Max.Lével: 120</li>
                                            <li class="list-group-item">Sub-Classes: 4</li>
                                            <li class="list-group-item">Armar: <img src="Imagem/armas/" style="width:260px;"/> </li>
                                          </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <!-- Personagem 04: Monk -->
                            <div class="col" style="margin-left:20px;">
                                
                                <img class="" src="Imagem/perso/lvs/monkei.gif" alt="">
                                
                                <!-- Card Geral Branco: abaixo do personagem 04 -->
                                <div class="card" style="width: 18rem;">
                                  
                                  <h3>Monk</h3>
                                    
                                  <div class="card-body">
                                    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#mongecollapse" aria-expanded="false" aria-controls="collapseExample">Info!</button>
                                    <button type="button" class="btn btn-success">Jogar</button>
                                  </div>
                                    
                                    <!-- Collapse Guerreiro, Personagem: 01 -->
                                    <div class="collapse" id="mongecollapse">
                                        
                                      <div class="card" style="width: 18rem;">
                                          <div class="card-body">
                                            <h5 class="card-title">Sub-Classes</h5>
                                            <p class="card-text">Monge, Mestre e Shura.</p>
                                          </div>
                                          <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Max.Lével: 110</li>
                                            <li class="list-group-item">Sub-Classes: 3</li>
                                            <li class="list-group-item">Armar: <img src="Imagem/armas/arma-monk.png" style="width:230px;"/> </li>
                                          </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- Coluna Geral 02: Em Branco -->
                <div class="col-6" id="col-02">
                    b
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