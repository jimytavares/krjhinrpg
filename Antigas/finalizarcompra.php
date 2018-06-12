<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.error {color: #FF0000;}
    
    body{
	background-image: url('Imagem/');
	background-repeat: repeat;
	background-position: left top;
    }
    
    table #teste1 {
    width: 100px;
    background-color: #f1f1c1;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    border-color: darkgreen;
    }
    th, td {
    padding: 5px;
    text-align: center;
    }
</style>

</head>

<body>  

<?php include ('inc/logo.inc'); ?>

<div class="imgCenter">
    
     <h2>Compra Realizada</h2>
     <img src="Imagem/OK.png" />
  <p>Sua compra foi realizada com sucesso, para voltar a página de seleção de campeão clique no botão VOLTAR.</p>
   
   <img src="Imagem/cash.jpg" />
       <br />
   
   <?php 
    $quant = $_GET['quantidade']; 
    
    echo '<b>Quantidade Solicitada:</b>';
    echo $quant;
        echo '<br />';
    echo '<b>Valor Total:</b>';
    echo ($quant * 50);
    ?>
    <br /><br />
   <a href="login.php" class="btn btn-success" typo="button">VOLTAR</a>
    
</div>



</body>
</html>