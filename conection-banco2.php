<?  

        $type = 'mysql';
        $host = 'localhost';
        $port = '3306';
        $name = 'krjhinrpg';
        $user = 'jimydickson';
        $pass = 'hunter18';


                $pdo = new \PDO(
                    "{$type}:host={$host};port={$port};dbname={$name};", $user, $pass,
                    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
                );

   
?>