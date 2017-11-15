<?php

    $servidor = 'localhost';
    $usuario = 'dbitens';
    $senha = '12345';
    $banco = 'dbitens';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if (mysqli_connect_errno())trigger_error(mysqli_connect_error());

?>