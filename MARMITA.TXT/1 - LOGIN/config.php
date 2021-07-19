<?php

// class ConectaBanco {


    $host = 'localhost';
    $porta = '5432';
    $user = 'postgres';
    $pass = 'postgres';
    $db = 'banco_real';

    try{
        echo 'sucesso';
        $con = new PDO("pgsql:host=$host;dbname=$db;port=$porta;", $user, $pass);
        // $con->exec('SET CHARSET utf8');
        echo $con;
        echo 'sucesso';
    }
    catch(Exception $e){
        echo $e->getMessage();
    }	
	// public static $con;

	// //Cria um objeto PDO no padrão Singleton 
	// public static function conexao(){
	// 	if (!isset(self::$con)) {

	// 		$host = 'localhost';
    //         $porta = '5432';
	// 		$user = 'postgres';
	// 		$pass = 'trackk';
	// 		$db = 'banco_real';

	// 		try{
	// 			self::$con = new PDO("postgresql:host=$host;dbname=$db;port=$porta;", $user, $pass);
	// 			self::$con->exec('SET CHARSET utf8');
    //             echo self::$con;
	// 		}
	// 		catch(Exception $e){
	// 		echo $e->getMessage();
	// 		}	
	// 	}
	// 	return self::$con;
	// }   


// }

?>
