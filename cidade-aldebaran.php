<!DOCTYPE html>

<html>
    
    <?php include ('.globals/header.php'); ?>
        
<body>
    
    <!-- Menu -->
    <section>
        
        <div class="row">
            <div class="col-md-auto">
                <div class="nav flex-column nav-pills menu-all" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"> <i class="fas fa-home"></i> </a>
                   
                    <div class="dropright">
                        <a class="nav-link dropdown-toggle" id="v-pills-home-tab" data-toggle="dropdown" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> 
                                <i class="fas fa-user"></i> 
                        </a>
                        <!-- Itens do DropRoght -->
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
                        <!-- Itens do DropRoght -->
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
            <div class="col">
              
            </div>
        </div>
        
    </section>
    
    
    <!-- -->
    <section>
        <div class="container-fluir" id="" style="padding-top:1000px;">
            
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