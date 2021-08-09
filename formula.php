<?php

        try{
            $pdo = new PDO("pgsql : host = localhost; dbname = banco_real;port = 5432;user = postgres; password = 'postgres'");
        }
        catch (PDOException $e){
            echo "Erro com banco de dados :".$e->getMessage();
        }
        catch (Exception $e){
            echo "Erro generico :".$e->getMessage();
        }

$custo = $_POST["custo"];
$comprou = $_POST["comprou"];
$pagou = $_POST["pagou"];
$dia = $_POST["dia"];

$send->execute([$_POST["custo"], $_POST["comprou"], $_POST["pagou"], $_POST["dia"]]);
$resultado = $send->fetch();



         
        





?>

