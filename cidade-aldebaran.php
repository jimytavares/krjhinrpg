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
            $sql= "SELECT * FROM personagem";

            $sth = $conn->prepare($sql);
            /*$sth->bindValue(":id", 1);*/ 

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
            $object2->rop;*/
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>
     <!-- Funções -->
    
     <!-- Background -->
     <style>
         body {
            background-image: url('Imagem/aldebaran-wallpaper.jpg');
            background-size: cover;
            background-color:;
            background-repeat: no-repeat;
            background-position:;
     </style>
    
</head>
<body>
    
    <div class="row" id="menu-background">
            <div class="col-5" style="color:white; padding-left:120px;">
                <div class="row">
                    <div class="col-2">
                        <img src="Imagem/perso/lvs/guerreiro.gif" />
                    </div>
                    <div class="col-7" style="padding-top:12px; font-family: 'Verdana', Times, serif;">
                        Cidade de Al de Baran
                    </div>
                </div>
            </div>
            
            <div class="col" style="padding-top:8px; color:white;">
                <form action="/action_page.php">
                    <i class="fa fa-pied-piper-alt" style="font-size:22px; color:#6666ff;"></i> <input type="text" name="FirstName" id="input-menu" value="" placeholder="Ações do Jogo"><br>
                </form>
            </div>
        
            <div class="col" id="col-menu-button">
                <img src="Imagem/gold2.png" /> 999,99 
                <a href="RPG-Swordman.php"> <button type="button" class="btn btn-outline-success btn-sm" style="border-style: solid; border-color:green;">Perfil</button> </a>
                <button type="button" class="btn btn-outline-danger btn-sm" style="border-style: solid; border-color:red;"> <i class="fa fa-sign-out"></i>Sair!</button>
            </div>
    </div>
    
    <!-- <button type="button" class="buttonmenu"> <i class="fa fa-sign-out" style="font-size:16px; color:white;"></i> </button> -->
    <div class="container">
        <div class="row col01-apresentacao-aldebaran">
            <div class="col" style="background-image: url(Imagem/background-apresentacao-aldebaran.jpg); background-size: cover; height: 400px; border-radius: 6px;" >
                <div class="texto-apresentacao-aldebaran-center">
                    <p>Al de Baran</p>
                    <button type="button" class="btn btn-outline-primary" style="border-style: solid; border-color:green;">Primary</button>
                </div> 
            </div>
            <div class="col-5 offset-1" style="background-color:#121619; border-radius:6px; text-align:center;">
                
                <img src="Imagem/perso/lvs/guerreiro.gif" style="margin-top:10px;"/>
                    <br/><br/>
                <img src="Imagem/gold.png" style="width:36px; height:30px;"/> 999,99
                <img src="Imagem/itens/ticket-teleporte.png" style="width:43px; height:40px;"/> 100
                <i class="fa fa-signal" style="font-size:28px; color:#33ff33;"></i> 999
                    <hr style="height:2px; border:none; color:#ffffff; background-color:white; margin-top:10px; margin-bottom:10px; width:70%;"/>
                
                <div class="row" style="color:white; font-weight: ; font-size:16px;">
                    <div class="col" style="text-align:left;">
                        <p>Nome: <?php echo $object->nome ?> </p>
                        <p>Level: <?php echo $object->lv ?> </p>
                        <p>Classe: <?php echo $object->classe ?> </p>
                    </div>
                    <div class="col" style="text-align:left;">
                        <p> a: </p>
                        <p> b: </p>
                        <p> c: </p>
                    </div>
                </div>
                    <br />
                <form action="/action_page.php">
                    <i class="fa fa-pied-piper-alt" style="font-size:42px; color:#6666ff;"></i> 
                    <input type="text" name="FirstName" id="input-menu" value="" placeholder="Ações do Jogo"><br>
                </form>
                
            </div>
        </div>
    </div>
    
    <div class="container">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary">Primary</button>
    </div>
    
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</body>