<!DOCTYPE html>

<html>
    
    <?php include ('.globals/header.php'); ?>
        
<body>
    
    <!---- Menu ---->
    <nav id="position">
        <div class="row">
            
            <div class="col-md-auto">
                <div class="nav flex-column nav-pills menu-all" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  
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
              <img src="Imagem/perso/lvs/guerreiro.gif" id="img-perso-menu"/>
              <p><strong>Name:</strong> <?php echo $_SESSION['usuario'] ?> </p>
                <div class="progress" style="margin-left:-15px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%; color:black;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">eXp 25%</div>
                </div>
            </div>
            
        </div>
    </nav>
    
    <!-- 01 Section: Show Houses -->
    <section class="section01">
        
<<<<<<< .mine
        a<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>aa<br/>a
||||||| .r43
=======
        <div class="row container-fluid" style="text-align:center; margin-top:">
            <div class="col">
                a
            </div>
            <div class="col">
                b
            </div>
            <div class="col">
                c
            </div>
            <div class="col">
                d
            </div>
        </div>
>>>>>>> .r46
        
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