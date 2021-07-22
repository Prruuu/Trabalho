<?php
    
    date_default_timezone_set("America/Sao_Paulo");

    try{
            $conexao = new PDO("pgsql:host=localhost;dbname=postgres;port=5432;user=postgres;password='postgres';");
    }catch(PDOException $e){
            echo $e->getMessage();
    }
    
   $stmt = $conexao ->  prepare("select * from login where nome = ? and senha = ?");
    $stmt -> execute([$_POST["nome"], $_POST["senha"]]);
    $resultado = $stmt->fetch();

    if ( !empty($resultado)){
        session_start();
        $_SESSION["login"]= $resultado["nome"];
        header("location: perfil.php");
    }else{
        header("location: index.php");
    }
?>