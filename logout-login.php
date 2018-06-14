<?php

   /* session_start();
    unset($_SESSION['id']);
    unset($_SESSION['usuario']);
    session_destroy();
    session_write_close();
    header('Location: index.php');
    exit; */

            session_start();
            $_SESSION['id'] = '';
            $_SESSION['usuario'] = '';
            $_SESSION['logado'] = false;
            
            header('location:index.php');

?>