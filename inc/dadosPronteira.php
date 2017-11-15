<?php
        echo   
            //1ª Primeira ação do game, escolher caminho
            //Usando o empty para retornar TRUE na variavel $cam
            
             $c1 ="";
        
        if (isset ($_POST['valor'])){
                
             //2ª Ação do game, ve info da cidade ou não

                $c1 = $_POST['valor'];
    
                if ( $c1 == 'sim' ){
                    
                    echo '<div class="center">';
                    
                    echo '<img src="Imagem/cidade-fogo2.png" /> <br />';
                        
                        echo '<br />';
                    echo '<div class="container">
                            <span class="label label-default">Pousada</span>
                            <span class="label label-success">Loja de Armas</span>
                            <span class="label label-info">Ferreiro</span>
                            <span class="label label-warning">Centro da Cidade</span>
                            <span class="label label-danger">Status</span>
                          </div>
                        ';
                        echo '<br />';
                    
                    echo '
                            <div class="container-fluid">
                                <h1>Centro de Prontera</h1>
                                    <img src="Imagem/pronteira/centro-prontera.png" class="img-rounded" alt="Cinque Terre" width="404" height="236" />
                                <p>Resize the browser window to see the effect.</p>
                                
                                <div class="row">
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                    
                                        <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#dormirM">Dormir</button>
 
                                        <div class="modal fade" id="dormirM" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Pousada Pronteira</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a pousada da cidade de Prontera.</p><p>Ao dormir na pousada você restaura todo o HP e SP do seu personagem..</p>
                                                         <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                                         <p>O custo de cada repouso são 100 de GOLD a cada estadia.</p><br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair da Pousada</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavenderblush;">
                                    
                                    <img src="Imagem/pronteira/npc-fernanda-pronteira.gif" />
                                    
                                    <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#ferM"><span class="glyphicon glyphicon-envelope"></span> Talk Fernanda</button>
 
                                        <div class="modal fade" id="ferM" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Kafra Fernanda</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Olá Aventureiro..</p>
                                                            <img src="Imagem/Pronteira/kafra-prontera.gif" />
                                                        <p>Precisa de Ajuda?</p>
                                                    
                                                    <div class="">
                                                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#simF">Sim</button>
                                                            <div id="simF" class="collapse">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            
                                                            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Não</button>
                                                            <div id="demo" class="collapse">
                                                                Não, obrigado. Voltarei em outro momento.
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/npc-ralph-pronteira.gif" />
                                    
                                        <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#ralphM"><span class="glyphicon glyphicon-envelope"></span> Talk Fernanda</button>
 
                                        <div class="modal fade" id="ralphM" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Pousada Pronteira</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bem vindo a pousada da cidade de Prontera.</p><p>Ao dormir na pousada você restaura todo o HP e SP do seu personagem..</p>
                                                         <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                                         <p>O custo de cada repouso são 100 de GOLD a cada estadia.</p><br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair da Pousada</button>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/npc-info-pronteira.gif" />
                                    
                                        <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Informações</button>
 
                                        <div class="window" id="janela1">
                                        <a href="#" class="fechar">X Fechar</a>
                                        <h4>Pousada Pronteiraa</h4>
                                        <p>Você acabou de dormir na Pousada da cidade de Pronteira, recuperando todo seu status HP e Mana.</p>
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                        <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                        </div>
 
 
                                                <!-- mascara para cobrir o site -->  
                                                <div id="mascara"></div>
                                    
                                    </div>
                                    
                                </div>
                            </div>';
                    
                    echo '
                            <div class="container-fluid">
                                        
                                    <h2>Ferreiros da cidade de Prontera.</h2>    
                                    <img src="Imagem/Pronteira/ferreiro-prontera.jpg" class="img-rounded" alt="Cinque Terre" width="404" height="236" />
                                    <img src="Imagem/Pronteira/ferreiro2-prontera.jpg" class="img-rounded" alt="Cinque Terre" width="404" height="236" />
                                        <br /><br />
                                    
                                <div class="row">
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                    <img src="Imagem/pronteira/npc-arma-pronteira.gif" />
                                    
                                    <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Concertar Arma</button>
 
                                    <div class="window" id="janela1">
                                    <a href="#" class="fechar">X Fechar</a>
                                    <h4>Pousada Pronteiraa</h4>
                                    <p>Você acabou de dormir na Pousada da cidade de Pronteira, recuperando todo seu status HP e Mana.</p>
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                    <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                    </div>
 
 
                                    <!-- mascara para cobrir o site -->  
                                    <div id="mascara"></div>
                                    
                                    </div>
                                    <div class="col-sm-3" style="background-color:lavenderblush;">
                                    
                                    <img src="Imagem/pronteira/npc-armadura-pronteira.gif" />
                                    
                                    <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Concertar Armadura</button>
 
                                    <div class="window" id="janela1">
                                    <a href="#" class="fechar">X Fechar</a>
                                    <h4>Pousada Pronteiraa</h4>
                                    <p>Você acabou de dormir na Pousada da cidade de Pronteira, recuperando todo seu status HP e Mana.</p>
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                    <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                    </div>
 
 
                                    <!-- mascara para cobrir o site -->  
                                    <div id="mascara"></div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/npc-afiar-pronteira.jpg" />
                                    
                                        <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Afiar Lamina</button>
 
                                        <div class="window" id="janela1">
                                        <a href="#" class="fechar">X Fechar</a>
                                        <h4>Pousada Pronteiraa</h4>
                                        <p>Você acabou de dormir na Pousada da cidade de Pronteira, recuperando todo seu status HP e Mana.</p>
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                        <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                        </div>
 
 
                                        <!-- mascara para cobrir o site -->  
                                        <div id="mascara"></div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/gm-game.gif" />
                                    
                                        <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#utilitP">Árvore de Habilidades</button>
 
                                        <div class="modal fade" id="utilitP" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Árvore de Habilidades</h4>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        <p>Bem vindo a pousada da cidade de Prontera.</p><p>Ao dormir na pousada você restaura todo o HP e SP do seu personagem..</p>
                                                         <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                                         <p>O custo de cada repouso são 100 de GOLD a cada estadia.</p><br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair da Loja</button>
                                                    </div>
                                                    
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>';
                    
                    echo '
                            <div class="container-fluid">
                                    
                                    <h2>Mercado geral da cidade de Prontera.</h2>
                                    <img src="Imagem/Pronteira/mercado-prontera.jpg" class="img-rounded" alt="Cinque Terre" width="404" height="236" />
                                    <img src="Imagem/Pronteira/mercado2-prontera.jpg" class="img-rounded" alt="Cinque Terre" width="404" height="236" />
                                        <br /><br />
                                    
                            <div class="row">
                                
                                <div class="col-sm-3" style="background-color:lavender;">
                                    
                                    <img src="Imagem/pronteira/npc-utilit-prontera.gif" />
                                    
                                    <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#utilitP">Loja de Utilitades</button>
 
                                    <div class="modal fade" id="utilitP" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Loja de Utilidades</h4>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        <p>Bem vindo a pousada da cidade de Prontera.</p><p>Ao dormir na pousada você restaura todo o HP e SP do seu personagem..</p>
                                                         <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                                         <p>O custo de cada repouso são 100 de GOLD a cada estadia.</p><br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair da Loja</button>
                                                    </div>
                                                    
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavenderblush;">
                                    
                                    <img src="Imagem/pronteira/npc-mercador-pronteira.gif" />
                                    
                                    <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#armasP">Loja de Armas</button>
 
                                        <div class="modal fade" id="armasP" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Loja de Armas</h4>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        <p>Bem vindo a pousada da cidade de Prontera.</p><p>Ao dormir na pousada você restaura todo o HP e SP do seu personagem..</p>
                                                         <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                                         <p>O custo de cada repouso são 100 de GOLD a cada estadia.</p><br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair da Loja</button>
                                                    </div>
                                                    
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/npc-armaduras-prontera.gif" />
                                    
                                        <button class="buttonPr buttonPr1" typo="button" data-toggle="modal" data-target="#armadurasP">Loja de Armaduras</button>
 
                                        <div class="modal fade" id="armadurasP" role="dialog">
                                            <div class="modal-dialog">
    
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Loja de Armaduras</h4>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                        <p>Bem vindo a pousada da cidade de Prontera.</p><p>Ao dormir na pousada você restaura todo o HP e SP do seu personagem..</p>
                                                         <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                                         <p>O custo de cada repouso são 100 de GOLD a cada estadia.</p><br />
                                                         <p><kbd>Bem Vindo e volte sempre.</kbd></p>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair da Loja</button>
                                                    </div>
                                                    
                                                </div>
      
                                            </div>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3" style="background-color:lavender;">
                                    
                                        <img src="Imagem/pronteira/npc-info-pronteira.gif" />
                                    
                                        <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Informações</button>
 
                                        <div class="window" id="janela1">
                                        <a href="#" class="fechar">X Fechar</a>
                                        <h4>Pousada Pronteiraa</h4>
                                        <p>Você acabou de dormir na Pousada da cidade de Pronteira, recuperando todo seu status HP e Mana.</p>
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                        <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                        </div>
 
 
                                                <!-- mascara para cobrir o site -->  
                                                <div id="mascara"></div>
                                    
                                    </div>
                                    
                                </div>
                            </div>';
                    
                    //Tabela da 1ª Cidade: Prontera
                    echo '<table id="teste1" align="center">
		                      <tr>
			                     <th>Pousada</th>
			                     <th>Loja de Armas/Utilits</th>		
			                     <th>Ferreiro</th>
                                 <th>Centro da Cidade</th>
		                      </tr>
		                      <tr>
			                     <td>
                                    <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                    
                                    <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Dormir</button>
 
                                    <div class="window" id="janela1">
                                    <a href="#" class="fechar">X Fechar</a>
                                    <h4>Pousada Pronteiraa</h4>
                                    <p>Você acabou de dormir na Pousada da cidade de Pronteira, recuperando todo seu status HP e Mana.</p>
                                        <img src="Imagem/pronteira/npc-dormir-pronteira.gif" />
                                    <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                    </div>
 
 
                                    <!-- mascara para cobrir o site -->  
                                    <div id="mascara"></div>
                                 </td>
			                     
                                 <td>
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-mercador-pronteira.gif" />
                                    </div>
                                    <div class="">
                                <button id="" class="buttonPr buttonPr1" onclick="">Comprar Armadura</button>
                                    </div>
                                 </td>		
			                     
                                 <td>
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-arma-pronteira.gif" />
                                    </div>
                                    <div class="">
                                <button id="" class="buttonPr buttonPr1" onclick="">Concertar Arma</button>
                                    </div>
                                 </td>
                                 
                                 <td>
                                    <img src="Imagem/pronteira/npc-info-pronteira.gif" />
                                    
                                    <button href="#janela1" rel="modal" class="buttonPr buttonPr1">Informações</button>
 
                                    <div class="window" id="janela">
                                    <a href="#" class="fechar">X Sair</a>
                                    <h4>Guarda de Pronteira</h4>
                                    <p>Oi aventureiro, trabalho defendendo a cidade de pronteira a mais de 25 anos.</p>
                                        <img src="Imagem/pronteira/npc-info-pronteira.gif" />
                                    <p>O custo da pousada para cada noite é, 100 GOLDs. Obrigada e volte sempre.</p>
                                    </div>
 
 
                                    <!-- mascara para cobrir o site -->  
                                    <div id="mascara"></div>
                                 </td>
                                 
		                      </tr>
		                      <tr>
                              
                                <td> 
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-fernanda-pronteira.gif" /> 
                                    </div>
                                    <div class="">
                                <button id="" class="buttonPr buttonPr1" onclick="">Talk to Fernanda</button>
                                    </div>
                                </td>
                                
			                    <td>
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-mercador-pronteira.gif" />
                                    </div>
                                    <div class="">
                                <button id="" class="buttonPr buttonPr1" onclick="">Comprar Armadura</button>
                                    </div>
                                </td>		
			                    
                                <td>
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-armadura-pronteira.gif" />
                                    </div>
                                    <div class="">
                                <button id="" class="buttonPr buttonPr1" onclick="">Concertar Armadura</button>
                                    </div>
                                </td>
                                
                                <td> 
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-montaria-pronteira.gif" />
                                    </div>
                                    <div class="">
                                <button id="monta" class="buttonPr buttonPr1" onclick="montaPronteira()">Comprar Montaria</button>
                                    </div>
                                </td>
                                
		                      </tr>
		                      <tr>
                              
			                     <td>
                                    <div class="">
                                 <img src="Imagem/Pronteira/npc-ralph-pronteira.gif" />
                                    </div>
                                    <div class="">
                                 <button id="" class="buttonPr buttonPr1" onclick="">Talk to Ralph</button>
                                    </div>
                                 </td>
                                 
			                     <td>
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-mercador-pronteira.gif" />
                                    </div>
                                    <div class="">
                                 <button id="" class="buttonPr buttonPr1" onclick="">Comprar Porções</button>
                                    </div>
                                 </td>		
			                     
                                 <td>
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-afiar-pronteira.jpg" />
                                    </div>
                                    <div class="">
                                 <button id="" class="buttonPr buttonPr1" onclick="">Afiar Lamina</button>
                                    </div>
                                 </td>
                                 
                                 <td> 
                                    <div class="">
                                <img src="Imagem/Pronteira/npc-castelo-pronteira.gif" />
                                    </div>
                                    <div class="">
                                 <button id="seguir" class="button button1" onclick="seguirGame()">Entrar no Castelo</button> 
                                    </div>
                                 </td>
                                 
		                      </tr>
	                   </table>';
                    
                    echo '<br />';
                    
                        echo '<br />';
                        
                    
                    //Tabela de Informações do Personagem 1ª Cidade
                    echo '<table id="teste1" align="center">
		                      <tr>
			                     <th>Status</th>
			                     <th>Personagem</th>		
			                     <th>Mochila</th>
                                 <th>Skills</th>
		                      </tr>
                              
		                      <tr>
			                     <td> <img src="Imagem/perso/lvs/sowrdGIF.gif" /> </td>
			                     <td>Espadachim Classe 1-1</td>		
			                     <td>Level: 01</td>
                                 <td> <button class="button button1" >Habilidades</button></td>
		                      </tr>
		                      <tr>
                                <td> <button class="button button1" onclick="alertEXP()">Experiencia 0%</button> </td>
			                    <td>
                                
                                <button class="button button1">Itens Equipados</button>
                                
                                </td>		
			                    <td> <button id="" class="button button1" onclick="()" >Itens</button> </td>
                                <td> <a href="http://google.com" target="_blank"><button id="monta" class="button button1" onclick="montaPronteira()">Árvore de Habilidades</button></a> </td>
		                      </tr>
		                      <tr>
			                     <td> <button class="button button1" onclick="alertCLAS()">Classe: 0%</button></td>
			                     <td>Concertar Armadura</td>		
			                     <td><button id="" class="button button1" onclick="()">Equipamentos</button> </td>
                                 <td> <button id="seguir" class="button button1" onclick="seguirGame()">Seguir Game</button> </td>
		                      </tr>
		                      <tr>
                                    <td> <button class="button button1" onclick="alertGOLD()">Gold: 0</button></td>
			                        <td>Comprar STR</td>	
                                    <td>Reforçar Armadura</td>
		                      </tr>
                            
	                   </table>';
                    
                    //Ativa a função para mostrar as informações do personagem.
                        echo '<p id="infoP2" onclick="infoPersonagem()"></p>';
                    
                    //Seguir Game, clicando no botão para ativar a função de seguir o jogo (Botão 4 tabela 3 Botão)
                        echo '<p id="seguir2" onclick="seguirGame()"></p>';
                    
                    //Mostrando dicas da cidade atraves de uma função. (Botão: 1 Tabela 5 Botão)
                        echo '<p id="dicas2" onclick="dicasPronteira()"></p>';
                    
                    //Adquirindo montaria
                        echo '<p id="monta2" onclick="montaPronteira()"></p>';
                    
                    echo '</div>';
                    
                    //jji
                    echo '<hr>';
                    echo '<br />';
                        
                    echo '<div class="container">
                            <h2>Deseja sair da Cidade?</h2>
                            <img src="Imagem/sair-de-pronteira.jpg"/>
                            <p><strong>Note:</strong> saindo da <strong>Cidade</strong> você começara a explocar os arredores da cidade de Pronteira.</p>
  
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="glyphicon glyphicon-envelope"></span> Portais da Cidade</a>
                                </h4>
                            </div>

      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="glyphicon glyphicon-envelope"></span> Portal A (Esquerdo)</a>
        </h4>
      </div>

      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="glyphicon glyphicon-envelope"></span> Portal B (Direito)</a>
        </h4>
      </div>

      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>

    </div>
  </div>
</div>';
                    
                        echo '</div>';
                    
                   echo '<form action="" method="post" align="center">  
                            <b>Action The Game:</b>
                        <br>
                            <input type="text" name="valor" value="">
                        <br>
                            <button class="buttonA buttonA1">Seguir</button>
                        <br>
                    </form>'; 
        
                } elseif ( $c1 == 'nao') {
                    echo "Não desejou vê as informações da cidade;";
                }
                

        }
          
?>