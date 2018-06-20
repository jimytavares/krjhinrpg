<?php

    class dinheiro
    {
        
       public function gold { 
            session_start();  

            require_once("database/Connection.class.php");

            $sql= "SELECT * FROM cash";
            $sth = $conn->prepare($sql);

                if ($sth->execute()) 
                {
                    $result = $sth->fetchAll(PDO::FETCH_OBJ);
                    $object2 = '';
                    foreach ($result as $row) 
                    {
                        $object2 = $row;
                    }
                }

            $object2->gold;
           
        }
    }

?>