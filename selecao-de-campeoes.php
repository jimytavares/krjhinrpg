<!DOCTYPE HTML>
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
            $sql= "SELECT * FROM personagem";

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
            $object->cash;
    
    ?>
    
    <meta charset="utf-8">
    <title>RPG | JhinLindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!--  Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
    
    <style>
        body {
            background-image: url('Imagem/foto-index-3.png');
            background-size: cover;
            background-color:;
            background-repeat: no-repeat;
            background-position:;
            font-family: 'Arial';
            text-align: center;
        }
    </style>

</head>
<body>
    
    <div class="row" id="row-menu">
        <div class="col">
            <img src="img/favicon-72.png" />
        </div>
        <div class="col">
            a
        </div>
        <div class="col" id="col-menu-button-selecao">
            
            <div class="btn-group">
              <button type="button" class="btn btn-outline-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"> <i class="fa fa-user"></i> <b>Conta:</b> <?php echo $_SESSION['usuario'] ?> </a>
                <a class="dropdown-item" href="#" style="color:#b3b300;"> <img src="Imagem/gold2.png" /> Gold: <?php echo ($object->gold) ?> </a>
                <a class="dropdown-item" href="#">Configurações</a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout-login.php"> <i class="fa fa-sign-out" style="font-size:px;"></i> Deslogar!</a>
              </div>
            </div>
            
            <a href="logout-login.php" class="btn btn-outline-light btn-sm"> <i class="fa fa-sign-out" style="font-size:px;"></i>Logout! </a>
        </div>
    </div>
    
    <div class="" style="margin-top:20px;">
        <h3>Seleção de Campeções</h3>
        <p>Selecione a classe que você quer iniciar sua aventura, apos escolher determinada classe <br/>todo o progesso que foi feito com ela será salvo. Você também pode jogar com mais de uma classe.</p>
    </div>
        
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</body>
</html>