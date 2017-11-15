<?php

    $mysqli = new mysqli ('localhost', 'dbitens', '12345', 'dbitens');

    //enviar instrucao sql para o banco
    $sql = "SELECT * FROM itens";

    $query = $mysqli->query($sql);
    
    //$dados = $query-> fetch_array(MYSQLI_ASSOC);
    while($dados = mysqli_fetch_array($query)){
        echo "Item: " . $dados['item'];
    }
    
?>


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
                echo "<br />";
                echo '<div class="container">';

                    print "<h2><small>Bem Vindo ao</small> Caminho do Fogo</h2> <br /><br />";
                    echo '<img src="Imagem/camfogo.png" alt="testejim" width="" height=""/> <br /><br />';
                    print "A cidade é muito grande e precisa se explorada. <br />";
                    print "Deseja explorar/interagir com a cidade? <kbd>sim / não</kbd>";

                echo '<form action="cidadePronteira1.php" method="post">

                        <p><b>Action The Game:</b></p> 
                        <input type="text" name="valor" value="">
                        <button class="btn btn-primary">Seguir</button>
                              <br>
                      </form>';
                echo '</div>';    

                 //fim do caminho do fogo            
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