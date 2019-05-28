FUNÇÃO QUE VERIFICA SEM O USUARIO JA E EXISTENTE SE ELE FOR == 0 ELE ADICIONA
SE FOR EXISTENTE ELE APENAS CARREGA O ONRELOAD E SALVA NORMALMENTE FAZENDO QUE NAO INSIRA O PARTICIPANTE NOVAMENTES
function onSave($param) {
            
        try{
            
            TTransaction::open('pg_ceres');
        
                $object = $this->form->getData('CursoParticipanteRecord');    

                $this->form->validate();

                $object->curso_id = filter_input(INPUT_GET, 'fk');        
                $object->usuarioalteracao = $_SESSION['usuario'];
                $object->dataalteracao = date("d/m/Y H:i:s");
                $object->tipo = 'SERVIDOR';  
                $object->situacao = 'DEFERIDO';

                if (!empty($object->participante_servidor_id)) {
                    foreach ($object->participante_servidor_id as $key => $item) {
                        
                        $objCS = new CursoParticipanteRecord();
                        $objCS->curso_id = $object->curso_id;        
                        $objCS->usuarioalteracao = $object->usuarioalteracao;
                        $objCS->dataalteracao = $object->dataalteracao;
                        $objCS->tipo = $object->tipo ;
                        $objCS->situacao = $object->situacao;
                        $objCS->participante_servidor_id = $key; 

                        $objCS->store();
                        /*
                        
                        $repositoryCS = new \Adianti\Database\TRepository('CursoParticipanteRecord');
                        $criteriaCS = new \Adianti\Database\TCriteria();
                        $criteriaCS->add(new \Adianti\Database\TFilter('curso_id', '=', filter_input(INPUT_GET, 'fk')));
                        $criteriaCS->add(new \Adianti\Database\TFilter('participante_servidor_id', '=', $key));
                        $countServidor = $repositoryCS->count($criteriaCS);

                        
                        if ($countServidor == 0) {
                            $objCS = new CursoParticipanteRecord();
                            $objCS->curso_id = $object->curso_id;        
                            $objCS->usuarioalteracao = $object->usuarioalteracao;
                            $objCS->dataalteracao = $object->dataalteracao;
                            $objCS->tipo = $object->tipo ;
                            $objCS->situacao = $object->situacao;
                            $objCS->participante_servidor_id = $key; 

                            $objCS->store();

                        }*/
                    }
                }
                
                
            TTransaction::close();
            
            new TMessage("info", "Registro salvo com sucesso!");
            
            $params['fk'] =filter_input(INPUT_GET, 'fk');
            $params['did'] =filter_input(INPUT_GET, 'did');
            
            TApplication::gotoPage('CursoParticipanteDetalhe', 'onReload', $param);

            } catch (Exception $e) {
                new TMessage('error', $e->getMessage());
                TTransaction::rollback();

                $this->form->setData($object); 
            }
    }