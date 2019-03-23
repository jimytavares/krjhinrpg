<section>
        
        <div class="row-menu">
            
            <div class="row no-gutters">
                
                <div class="col-md-auto" style="margin-top:10px;">
                    <i class="fas fa-bars" id="icon-menu"></i>
                </div>
                
                <div class="col-md-auto" style="margin-left: 20px;">
                    <button type="button" class="btn button-acction" style="height:20px;"> <i class="fa fa-user"></i> User: <?php echo $_SESSION['usuario'] ?> </button>
                </div>
                
                <div class="col-md-auto button-geral">
                    <div class="btn-group">
                      <button type="button" class="btn button-acction dropdown-toggle" style="height:20px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i> Settings
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"> <i class="fa fa-user"></i> <b>User:</b> <?php echo $_SESSION['usuario'] ?> </a>
                        <a class="dropdown-item" href="#" style="color:#b3b300;"> <img src="Imagem/gold2.png" /> Gold: <?php echo ($object->gold) ?> </a>
                        <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Configurações </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout-login.php"> <i class="fa fa-sign-out" style="font-size:px;"></i> Exit!</a>
                      </div>
                    </div>
                </div>
                
                <div class="col-md-auto button-geral">
                    <a href="logout-login.php"> <button type="button" class="btn button-acction" style="height:20px;"> <i class="fa fa-sign-out" style="font-size:px;"></i> Logout!</button> </a>
                </div>
                
            </div>
            
        </div>
                
                <!-- <div class="btn-group">
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

                <a href="logout-login.php" class="btn btn-outline-light btn-sm"> <i class="fa fa-sign-out" style="font-size:px;"></i>Logout! </a> -->
        
    </section>