<?php
function conectar(){
    $host = '127.0.0.1';
    $db = "banco_real";
    $user = "postgres";
    $pass = "trackk";
    $con = new PDO("pgsql:host=$host;port=5432;dbname=$db;user=$user;password=$pass");
    try{
        return $con;
    }   
    catch(Exception $erro){
        echo $erro;
        return false;
    }
}
?>
