<?php

    try{
        $conect = new PDO("pgsql:host=localhost;dbname=banco_real;port=5432;user=postgres;password='postgres'");
        // $conect = new PDO("psql:host=localhost:dbname=banco_real;post=5432","root","");
    }
    catch (PDOException $e){       
        echo "Erro com banco de dados: ".$e->getMessage(); 
    }
    catch (Exception $e)
    {
        echo"Erro generico: ".$e ->getMessage();
    }
    
    $stmt = $conect->prepare("select * from login where nome = ? and senha = ?");
    $stmt -> execute([$_POST["nome"], $_POST["senha"]]);
    $resultado = $stmt->fetch();
    

    if (!empty($resultado)){
        session_start();
        header("location: menu.php");
    }else{  
        header("location: index.php");
    }
?>