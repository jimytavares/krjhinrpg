<!DOCTYPE HTML>
<html>

    <?php include ('.globals/header.php'); ?>
    
<body class="body-selecao">
    
    <!-- Section 01: Menu -->
    <section>
        
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
    <!-- Bootstrap tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- MDB core JavaScript -->
    
</body>
</html>