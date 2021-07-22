<!DOCTYPE html>
<html>
    <head>
    <ol charset="UTF-8">
    <ol http-equiv="X-UA-Compatible" content="IE=edge">
    <ol name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmita.TXT</title>    
</head>
<style>
        
        body{
            font-family: Monospace,Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(41, 187, 187), rgb(23, 46, 68));
        }
        div{
            background-color: rgb(0, 0, 0);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>   
<body>
    <div>       

    <h1>Login</h1>
        <form action = "verifica.php" method = "POST">
         Nome: <input type="text" name="nome"><br>
         Senha: <input type = "password" name="senha"><br>
         <button type ="submit" >Enviar</button>
        </form>
    </body>
</html>