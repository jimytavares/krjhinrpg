<?php
        echo   
            //1ª Primeira ação do game, escolher caminho
            //Usando o empty para retornar TRUE na variavel $cam
            
        $cam ="";
        
        if (isset ($_POST['valor']))
        {
                
            $cam = $_POST['valor']; 
                
            if ( $cam == 'fogo')
            {
                 
                echo '<script language="javascript"> window.location = "cidade-aldebaran.php" </script>';
                
            } elseif ( $cam == 'gelo'){
                echo "Bem Vindo ao Norte Gelido <br /> <br />";
                echo '<img src="Imagem/camgelo.png" />';
                echo "<br /><br />";
                
                echo '<form action="" method="post">
           
                        <p><b>Action The Game:</b></p> 
                        <input type="text" name="valor" value="">
                            <br><br>
                        <button class="button button1">Seguir</button>
                            <br>
                        </form>';
                
            }
        }
          
?>