<?php 

        //use Util\Config\Conn\Connection
    
        require_once("database/Connection.class.php");
            
        $loginUser = $_POST['usuario'];
        $senhaUser = $_POST['senha'];

        $pdo = Connection::get()->connect();
        $stmt = $pdo->query( "SELECT * FROM usuarios WHERE usuario = '{$loginUser}' and senha = '{$senhaUser}';" );

        if($stmt->rowCount() > 0) {
            
            include ( 'selecao-de-campeoes.php' );
            
        }else {
            echo "Login ou Senha Incorreto";
        }
/*
        if ( $loginUser == "jimydickson" && $senhaUser == 123456 || $loginUser == "admin" && $senhaUser == "admin" )
        {
            include ( 'selecao-de-campeoes.php' );
        } else{
            echo "Login ou Senha Incorreto";
        }
  */  
?>