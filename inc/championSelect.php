<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    <style>
    .error {color: #FF0000;}

        body
        {
            background-image: url('Imagem/');
            background-repeat: repeat;
            background-position: left top;
        }
        
        .button4:hover {background-color: #e7e7e7;}
        .buttonPr 
        {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 7px 38px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .buttonPr1 
        {
            background-color: orangered;
            color: white;
            border: px solid #000000;
        }
        
        .buttonPr1:hover 
        {
            background-color: #0066ff;
            color: whith;
        }
        
        .carousel-inner > .item > img,
        .carousel-caption p { color: black; }
        .carousel-inner > .item > a > img 
        {
          width: 70%;
          margin: auto;
        }
        
        p  { text-align: center; }
        h4 { text-align: center; }
        
    </style>

</head>

<body>  

    <?php include ('inc/logo.inc'); ?>
    
    <!-- Buttons Loja -->
    <div class="container">
        <button type="button" class="btn btn-default btn-sm">Loja</button>
        <button type="button" class="btn btn-default btn-sm">Minha Conta</button>
        <button type="button" class="btn btn-default btn-sm">Compras</button>
        <a href="" > <img src="Imagem/carrinho.png" /> </a>
    </div>

    <!-- Carrosel
    <div class="container">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="Imagem/carousel/ninja01.jpg" alt="Chania" width="460" height="345">
          </div>

          <div class="item">
            <img src="Imagem/carousel/monk01.jpg" alt="Chania" width="460" height="345">
          </div>

          <div class="item">
            <img src="Imagem/carousel/sacer01.jpg" alt="Flower" width="460" height="345">
          </div>

          <div class="item">
            <img src="Imagem/carousel/paladin01.jpg" alt="Flower" width="460" height="345">
          </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div> -->
      
    <!--- Escolha de Personagens ---> 
    <div class="container-fluid" align="center">

         <h2>Classes</h2>
         <p>Para iniciar o game, selecione seu personagem.</p>

         <div class="row">

            <div class="col-sm-4">
               
                   
                        <a href="RPG%20-%20Sword.php"> <img src="Imagem/perso/lvs/guerreiro.gif" /> </a>
                        <p> <b>Guerreiro</b> <br /> Status: Força, agilidade, dextreza e vida. </p>   
                        <a href="RPG%20-%20Sword.php"> <button type="button" class="btn buttonPr1">Selecionar Classe</button> </a>
                    
              
            </div>

            <div class="col-sm-4">
                <a href="RPG.php"> <img src="Imagem/perso/lvs/assasino.gif" /> </a>
                <p><b>Assasino</b> <br /> Status: Inteligencia, dextreza e agilidade. </p>
                <button type="button" class="btn btn-primary disabled">Desabilitado temporariamente</button>
            </div>

            <div class="col-sm-4">
                <a href="RPG.php"> <img src="Imagem/perso/lvs/monkei.gif" /> </a>
                <p><b>Lutador</b> <br /> Status: Inteligencia, dextreza e agilidade. </p>
                <button type="button" class="btn btn-primary disabled">Desabilitado temporariamente</button>
            </div>

          </div>
    </div>
          
    <div class="container-fluid" align="center">
         <br /><br />
         <div class="row">

            <div class="col-sm-4">
                <a href="RPG.php"> <img src="Imagem/perso/lvs/ceifador.gif" /> </a>
                <p><b>Ceifador</b> <br /> Status: Inteligencia, dextreza e agilidade. </p>
                <button type="button" class="btn btn-primary disabled">Desabilitado temporariamente</button>    
            </div>

            <div class="col-sm-4">
                <a href="RPG.php"> <img src="Imagem/perso/lvs/hunter.gif" /> </a>
                <p><b>Hunter</b> <br /> Status: Inteligencia, dextreza e agilidade. </p>
                <button type="button" class="btn btn-primary disabled">Desabilitado temporariamente</button>
            </div>

            <div class="col-sm-4">
                <a href="RPG.php"> <img src="Imagem/perso/lvs/superaprendiz.gif" /> </a>
                <p><b>Super Aprendiz</b> <br /> Status: Inteligencia, dextreza e agilidade. </p>
                <button type="button" class="btn btn-primary disabled">Desabilitado temporariamente</button>
            </div>

          </div>
    </div>
          

    <!--- Loja --->
    <div class="container">
        <h2 align="center">Loja ONLINE</h2>
    </div>
    
<div class="container">
      <p>Antes de iniciar o jogo, voce pode comprar itens para facilitar sua aventura.</p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nome do Item</th>
        <th>Preco do Item</th>
        <th>Descricao do Item</th>
        <th>Comprar Item</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <img src="Imagem/LOJA/item01.png" /> </td>
        <td> R$50,00 </td>
        <td> Melhoria na DEX + STR </td>
        
        <td> 
                                           <button class="btn btn-danger" typo="button" data-toggle="modal" data-target="#bonecaF">COMPRAR</button>
                                           
                                           <div class="modal fade" id="bonecaF" role="dialog">
                                            <div class="modal-dialog modal-lg">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Comprar Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a loja do jogo Tekketsu no Orphs.</p><p>Se Você deseja comprar o item Boneca Super Fofa, clique no botão COMPRAR.</p>
                                                        
                                                        <div class="imgCenter">
                                                        <img src="Imagem/LOJA/item01.png" />
                                                        </div>
                                                             <br />
                                                          
                                                           <table class="table table-condensed">
                                                            <thead>
                                                              <tr>
                                                                <th>Produto</th>
                                                                <th>Preco</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Boneca Super Fofa</td>
                                                                <td>R$ 50,00</td>
                                                                <td> <form method="get" action="finalizarcompra.php"> <input type="text" name="quantidade"> </td>
                                                                <td>R$50,00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    
                                                         <p>Ao clicar no botao comprar, é descontado diretamente da sua conta ou do seu cartão cadastrado na mesma.</p><br />
                                                         
                                                         <div class="botaoCenter">
                                                            
                                                                
                                                                 <button type="submit" class="btn btn-success">Finalizar Compra</button>
                                                            </form>
                                                         </div>
                                                             <br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Compra</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div> 
      </td>
      
      </tr>
      <tr>
        <td> <img src="Imagem/LOJA/item02.png" /> </td>
        <td> R$50,00 </td>
        <td> Melhoria na AGI + STR </td>
        
        <td> 
            
            <button class="btn btn-danger" typo="button" data-toggle="modal" data-target="#magicG">COMPRAR</button>
                                           
                                           <div class="modal fade" id="magicG" role="dialog">
                                            <div class="modal-dialog modal-lg">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Comprar Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a loja do jogo Tekketsu no Orphs.</p><p>Se Você deseja comprar o item Magicstone of Grace, clique no botão COMPRAR.</p>
                                                        
                                                        <div class="imgCenter">
                                                        <img src="Imagem/LOJA/item02.png" />
                                                        </div>
                                                             <br />
                                                          
                                                           <table class="table table-condensed">
                                                            <thead>
                                                              <tr>
                                                                <th>Produto</th>
                                                                <th>Preco</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Magicstone of Grace</td>
                                                                <td>R$ 50,00</td>
                                                                <td> <form method="get" action="finalizarcompra.php"> <input type="text" name="quantidade"> </td>
                                                                <td>R$50,00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    
                                                         <p>Ao clicar no botao comprar, é descontado diretamente da sua conta ou do seu cartão cadastrado na mesma.</p><br />
                                                         
                                                         <div class="botaoCenter">
                                                            
                                                                
                                                                 <button type="submit" class="btn btn-success">Finalizar Compra</button>
                                                            </form>
                                                         </div>
                                                             <br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Compra</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div> 
            
          </td>
      </tr>
      <tr>
        <td> <img src="Imagem/LOJA/item03.png" /> </td>
        <td> R$50,00 </td>
        <td> Melhoria na DEX </td>
        <td> 
        
            <button class="btn btn-danger" typo="button" data-toggle="modal" data-target="#cuteV">COMPRAR</button>
                                           
                                           <div class="modal fade" id="cuteV" role="dialog">
                                            <div class="modal-dialog modal-lg">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Comprar Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a loja do jogo Tekketsu no Orphs.</p><p>Se Você deseja comprar o item Very Cute Doll Hat, clique no botão COMPRAR.</p>
                                                        
                                                        <div class="imgCenter">
                                                        <img src="Imagem/LOJA/item03.png" />
                                                        </div>
                                                             <br />
                                                          
                                                           <table class="table table-condensed">
                                                            <thead>
                                                              <tr>
                                                                <th>Produto</th>
                                                                <th>Preco</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Very Cute Doll Hat</td>
                                                                <td>R$ 50,00</td>
                                                                <td> <form method="get" action="finalizarcompra.php"> <input type="text" name="quantidade"> </td>
                                                                <td>R$50,00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    
                                                         <p>Ao clicar no botao comprar, é descontado diretamente da sua conta ou do seu cartão cadastrado na mesma.</p><br />
                                                         
                                                         <div class="botaoCenter">
                                                            
                                                                
                                                                 <button type="submit" class="btn btn-success">Finalizar Compra</button>
                                                            </form>
                                                         </div>
                                                             <br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Compra</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
        
          </td>
      </tr>
      <tr>
        <td> <img src="Imagem/LOJA/item04.png" /> </td>
        <td> R$50,00 </td>
        <td> Melhoria na INT + AGI </td>
        <td> 
        
            <button class="btn btn-danger" typo="button" data-toggle="modal" data-target="#mechN">COMPRAR</button>
                                           
                                           <div class="modal fade" id="mechN" role="dialog">
                                            <div class="modal-dialog modal-lg">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Comprar Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a loja do jogo Tekketsu no Orphs.</p><p>Se Você deseja comprar o item Mechanical Plant Hat, clique no botão COMPRAR.</p>
                                                        
                                                        <div class="imgCenter">
                                                        <img src="Imagem/LOJA/item04.png" />
                                                        </div>
                                                             <br />
                                                          
                                                           <table class="table table-condensed">
                                                            <thead>
                                                              <tr>
                                                                <th>Produto</th>
                                                                <th>Preco</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Mechanical Plant Hat</td>
                                                                <td>R$ 50,00</td>
                                                                <td> <form method="get" action="finalizarcompra.php"> <input type="text" name="quantidade"> </td>
                                                                <td>R$50,00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    
                                                         <p>Ao clicar no botao comprar, é descontado diretamente da sua conta ou do seu cartão cadastrado na mesma.</p><br />
                                                         
                                                         <div class="botaoCenter">
                                                            
                                                                
                                                                 <button type="submit" class="btn btn-success">Finalizar Compra</button>
                                                            </form>
                                                         </div>
                                                             <br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Compra</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
         
           </td>
      </tr>
      <tr>
        <td> <img src="Imagem/LOJA/item05.png" /> </td>
        <td> R$50,00 </td>
        <td> Melhoria na LUK </td>
        <td> 
        
             <button class="btn btn-danger" typo="button" data-toggle="modal" data-target="#lyriaD">COMPRAR</button>
                                           
                                           <div class="modal fade" id="lyriaD" role="dialog">
                                            <div class="modal-dialog modal-lg">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Comprar Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a loja do jogo Tekketsu no Orphs.</p><p>Se Você deseja comprar o item Lyria Doll Hat, clique no botão COMPRAR.</p>
                                                        
                                                        <div class="imgCenter">
                                                        <img src="Imagem/LOJA/item05.png" />
                                                        </div>
                                                             <br />
                                                          
                                                           <table class="table table-condensed">
                                                            <thead>
                                                              <tr>
                                                                <th>Produto</th>
                                                                <th>Preco</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Lyria Doll Hat</td>
                                                                <td>R$ 50,00</td>
                                                                <td> <form method="get" action="finalizarcompra.php"> <input type="text" name="quantidade"> </td>
                                                                <td>R$50,00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    
                                                         <p>Ao clicar no botao comprar, é descontado diretamente da sua conta ou do seu cartão cadastrado na mesma.</p><br />
                                                         
                                                         <div class="botaoCenter">
                                                            
                                                                
                                                                 <button type="submit" class="btn btn-success">Finalizar Compra</button>
                                                            </form>
                                                         </div>
                                                             <br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Compra</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
          
            </td>
      </tr>
      <tr>
        <td> <img src="Imagem/LOJA/item06.png" /> </td>
        <td> R$50,00 </td>
        <td> Melhoria na LUK + INT </td>
        <td> 
        
            <button class="btn btn-danger" typo="button" data-toggle="modal" data-target="#enferM">COMPRAR</button>
                                           
                                           <div class="modal fade" id="enferM" role="dialog">
                                            <div class="modal-dialog modal-lg">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Comprar Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a loja do jogo Tekketsu no Orphs.</p><p>Se Você deseja comprar o item Chapéu de Efermeiro Angelical, clique no botão COMPRAR.</p>
                                                        
                                                        <div class="imgCenter">
                                                        <img src="Imagem/LOJA/item06.png" />
                                                        </div>
                                                             <br />
                                                          
                                                           <table class="table table-condensed">
                                                            <thead>
                                                              <tr>
                                                                <th>Produto</th>
                                                                <th>Preco</th>
                                                                <th>Quantidade</th>
                                                                <th>Subtotal</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>
                                                                <td>Chapeu de Enfermeiro Angelical</td>
                                                                <td>R$ 50,00</td>
                                                                <td> <form method="get" action="finalizarcompra.php"> <input type="text" name="quantidade"> </td>
                                                                <td>R$50,00</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    
                                                         <p>Ao clicar no botao comprar, é descontado diretamente da sua conta ou do seu cartão cadastrado na mesma.</p><br />
                                                         
                                                         <div class="botaoCenter">
                                                            
                                                                
                                                                 <button type="submit" class="btn btn-success">Finalizar Compra</button>
                                                            </form>
                                                         </div>
                                                             <br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Canc elar Compra</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
         
           </td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>