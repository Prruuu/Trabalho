<?php
    
    date_default_timezone_set("America/Sao_Paulo");

    try{
            $conexao = new PDO("pgsql:host=localhost;dbname=postgres;port=5432;user=postgres;password='postgres';");
    }catch(PDOException $e){
            echo $e->getMessage();
    }
    
   $stmt = $conexao ->  prepare("select * from login where nome = ? and senha = ?");
    
    // $stmt = $conexao-> prepare("update login set
    //                                 nome = :nome,
    //                                 senha = :senha 
    //                                 where id = :id");
    
    // $stmt -> bindvalue(":nome", $_POST["nome"]);
    // $stmt -> bindvalue(":senha", $_POST["senha"]);  
    // $stmt -> bindvalue(":id", $_POST["id"]);
    $stmt -> execute([$_POST["nome"], $_POST["senha"]]);
    // $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $resultado = $stmt->fetch();

    // echo '<pre>'; print_r($_POST); echo '</pre>';
    // echo '<pre>'; print_r($resultado); echo '</pre>';

    // exit;

    if ( !empty($resultado)){
        session_start();
        $_SESSION["login"]= $resultado["nome"];
        header("location: perfil.php");
    }else{
        header("location: index.php");
    }
?>