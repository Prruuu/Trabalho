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
                display: inline-block;
                padding: 10px 135px;
                font-size: 25px;
                cursor: pointer;
                text-align: center;	
                text-decoration: none;
                outline: none;
                color: rgb(0, 0, 0);
                background-color: rgb(25, 181, 254);
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
            <br><input type="text" placeholder="Nome" id="nome" name="nome"required></br>
            <br><input type="password" placeholder="Senha" id="senha" name="senha"required></br>
            <br><input type="radio" id="Adm" name="adm" value="var">
            <label for="adm">Adm</label><br><br>
            <input type="radio" id="Usuario" name="usuario" value="var">
            <label for="usuario">Usuario</label><br>
            <br><button type="submit">Enviar</button></br>
      </form>
    </div>
  </body>
</html>