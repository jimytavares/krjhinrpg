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
            $object->gold;
            $object->cash;

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
            background-image: url('Imagem/.jpg');
            background-size: cover;
            background-color:;
            background-repeat: no-repeat;
            background-position:;
     </style>
    
</head>
<body>
    
    <!-- Menu -->
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
                <div class="row">
                    <div class="col-3">
                        
                    </div>
                    <div class="col-1">
                        <a href="RPG-Swordman.php"> <i class="fa fa-user" style="font-size:23px; color:#ffe88c; text-shadow: 1px 0px 0px #a6a6a6, -1px 0px 0px #a6a6a6, 0px 1px 0px #a6a6a6, 0px -1px 0px #a6a6a6;" placeholder="teste"></i> </a> 
                    </div>
                    <div class="col-1">
                        <i class="fa fa-sign-out" style="font-size:23px; color:#ffe88c; text-shadow:2px 1px #a6a6a6;"></i>
                    </div>
                    <div class="col-1">
                        <i class="fa fa-cogs" style="font-size:23px; color:#ffe88c; text-shadow:2px 1px #a6a6a6;"></i>
                    </div>
                </div>
                
                <!-- <button type="button" class="btn btn-outline-danger btn-sm" style="border-style: solid; border-color:red;"> <i class="fa fa-sign-out"></i>Sair!</button> -->
            </div>
    </div>
    
    <!-- -->
    <section>
        <div class="container-fluir" id="section01">a</div>
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