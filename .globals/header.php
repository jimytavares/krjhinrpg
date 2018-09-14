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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css">
    <!--  Meu CSS -->
    <link href="css/Main.css" rel="stylesheet" type="text/css" media="all"/>

</head>