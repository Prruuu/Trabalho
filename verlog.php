<?php
    // Pdo = PHP DATA OBJECT 
    try{
        $pdo = new PDO("pgsql:host=localhost;dbname=banco_real;port=5432;user=postgres;password='postgres'");
        //tentando pdoar no postgres
    }
    // caso não conseguir aparece esse erro, se for no banco 
    catch (PDOException $e){       
        echo "Erro com banco de dados: ".$e->getMessage(); // O echo mostra a mensagem de erro, T_object_operator, a seta serve para acessar propriedades e metodos de um obj
    }
    //senão aparece esse se for erro "comum"
    catch (Exception $e){
        echo"Erro generico: ".$e->getMessage();
    }
    
    $conect = $pdo->prepare("select * from login where nome = ? and senha = ?");
    $conect->execute([$_POST["nome"], $_POST["senha"]]);
    $resultado = $conect->fetch();

    if (!empty($resultado)){
        session_start();
        header("location: menu.php");
    } 
    else{  
        header("location: index.php");
    }
?>      