<?php 

    $servidor = 'localhost';
    $usuario = 'krjhinrpg';
    $senha = '1234567';
    $banco = 'krjhinrpg';

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

?>