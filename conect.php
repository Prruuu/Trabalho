<?php

        try{
            $pdo = new PDO("pgsql:host = localhost;dbname = banco_real;port = 5432;user = postgres;password = 'postgres'");
        }
        catch (PDOException $e){       
            echo "Erro com banco de dados: ".$e->getMessage(); 
        }
        catch (Exception $e){
            echo"Erro generico: ".$e->getMessage();
        }

        $s = $con ->  prepare("SELECT orderid FROM usuarios ORDER BY dia");
        $s -> execute([$_POST["orderid"], $_POST["dia"]]);
        $result = $s->fetch();




?>