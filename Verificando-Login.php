<?php 
        //use Util\Config\Conn\Connection
        session_start();  
    
        require_once("database/Connection.class.php");
            
        $loginUser = $_POST['usuario'];
        $senhaUser = $_POST['senha'];

        $pdo = Connection::get()->connect();
        $stmt = $pdo->query( "SELECT * FROM usuario WHERE usuario = '{$loginUser}' and senha = '{$senhaUser}';" );

        if( $stmt->rowCount() > 0 )
        {
            $usuario = $stmt->fetch();
            
            $_SESSION['id']      = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['logado']  = true;
            
            header('location:selecao-de-campeoes.php');
        }else {
            
            $_SESSION['id']      = '';
            $_SESSION['usuario'] = '';
            $_SESSION['logado']  = false;
            
            header('location:index.php');
        }
?>