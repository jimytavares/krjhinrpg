<?php

class Personagem {


    $nome;
    
    public __construct() {
        
        
    }
    
    public __construct($idPersonagem) {
    
        //abre conexão
        //Pega o personagme por id
        //seta nas variáveis globais
        
        
    }
    
    public dados_perfil() {
            session_start();  
            require_once("database/Connection.class.php");

            $conn = Connection::get()->connect();
            $sql= "SELECT * FROM personagem WHERE id = :id;";

            $sth = $conn->prepare($sql);
            $sth->bindValue(":id", 1);

            if ($sth->execute()) 
            {
                $result = $sth->fetchAll(PDO::FETCH_OBJ);
                $object = '';

                foreach ($result as $row) 
                {
                    $object = $row;
                }
            }

            $object->nome;
            $object->classe;
            $object->level;
            $object->ticket;
            $object->hp;
            $object->mp;
            $object->exp;
            $object->atk;
            $object->def;
            $object->magia;
    }
    
    
    public function addExp($expQtd) {
        
        //abre conexão
        
        
        
    }
    
}

?>