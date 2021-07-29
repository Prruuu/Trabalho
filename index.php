<?php
  // try{
  //   $conect = new PDO("psql:host=localhost:dbname=banco_real;post=5432;user=postgres;password='postgres'");
  // }
  // catch (PDOException $e){       
  //   echo "Erro com banco de dados: " .$e->getMessage(); 
  // }
  // catch (Exception $e)
  // {
  //   echo"Erro generico: ".$e ->getMessage();
  // }
  
  // $stmt = $conect ->prepare("select * from login where nome = ? and senha = ?");
  // $stmt -> execute([$_POST["nome"], $_POST["senha"]]);
  // $resultado = $stmt->fetch();

  // if (!empty($resultado)){
  //   session_start();
  //   header("location: perfil.php");
  // }else{
  //   header("location: index.php");
  // }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marmi.txt</title>
    </head>
        <style>
              body{
                font-family: monospace,Arial, Helvetica, sans-serif;
            }
            div{
                background-color: rgb(0, 0, 0);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 60px;
                border-radius: 10px;
                color: #fff;
            }
            input{ 
                padding: 16px;
                border: none;
                outline: none;
                font-size: 20px;
                border-radius: 10px;
            }
            button{
                font-size: 15px;
                cursor: pointer;
                text-align: center;	
                text-decoration: none;
                outline: none;
                color: rgb(0, 0, 0);
                background-color: cyan;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
            }
            button:hover{
                background-color: rgb(45, 233, 233);
                cursor: pointer;
            }
            button:active {
                background-color:cyan;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
              }
        </style>
<body>
    <div>
    <form action = "verlog.php" method = "POST">
      <h1>
        LOGIN
      </h1>
    <br><input type="text" placeholder="Nome" id="nome"></br>
    <br><input type="password" placeholder="Senha" id="senha"></br>
    <br><button>Enviar</button></br>
    </div>
    </body>
</html>