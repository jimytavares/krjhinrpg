<?php 
    
        $loginUser = $_GET['usuario'];
        $senhaUser = $_GET['senha'];

        if ( $loginUser == "jimydickson" && $senhaUser == 123456 || $loginUser == "admin" && $senhaUser == "admin" )
        {
            include ( 'selecao-de-campeoes.php' );
        } else{
            echo "Login ou Senha Incorreto";
        }
    
?>