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

                    print "<h2><small>Bem Vindo à Cidade</small> Vestrigio Arcano</h2> <br />";
                    echo '<img src="Imagem/caminhodofogo.png" alt="testejim" width="" height=""/> <br /><br />';
                    print "O Mapa é composta por três tipos de terreno: <b>Cidade, floresta e área vulcanica.</b> <br />";
                    print "Deseja explorar/interagir com a cidade? <kbd>sim / não</kbd>";
                         
                    echo '<form action="cidadePronteira1.php" method="post">

                            <p><b>Action The Game:</b></p> 
                            <input type="text" name="valor" value="">
                            <button class="btn btn-primary">Seguir</button>
                                  <br>
                          </form>';
                          
                echo '</div>';    

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