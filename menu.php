<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Marmi.txt</title>
    </head>
<style>
/* CSS */
      * {
          margin: 0;
          padding: 0;
        }
      .navlinha {
          list-style: none;
          display: flex;
        }
        
        .navlinha li {
          letter-spacing: 3px;
          margin-left: 32px;
        }
        a {
          color: rgb(255, 255, 255);
          text-decoration: none;
          transition: 0.3s;
        }
      a:hover {
          opacity: 0.7;
        }
      nav {
          display: flex;
          justify-content: space-around;
          align-items: center;
          font-family: Monospace, Arial, sans-serif;
          background: rgba(0, 0, 0, 0.9);;
          height: 8vh;
      }
      body{
          font-family: Monospace,Arial, Helvetica, sans-serif;
      }
      div{
          background-color: rgb(0, 0, 0);
          margin: 10px;
          transform: translate(0%,5%);
          padding: 30px;
          border-radius: 15px;
          color: #fff;
          display: block;
      }
      input{
            padding: 20px;
            border: none;
            outline: none;
            font-size: 25px; 
            border-radius: 10px;
      }
      h1{
          background-color: rgb(0, 0, 0);
          margin: 10px;
          transform: translate(0%,5%);
          padding: 30px;
          border-radius: 15px;
          color: #fff;
          display: block;
      }
      h2{
        font-size: 45px;
      }
      h3{
          background-color: rgb(25, 181, 254);
          margin: 10px;
          top:20%;
          height: 100%;
          padding: 30px;
          transform: translate(15%);
          border-radius: 15px;
          color: #fff;
      }
      button{

              display: inline-block;
              padding: 10px 270px;
              font-size: 25px;
              cursor: pointer;
              text-align: center;	
              text-decoration: none;
              outline: none;
              color: rgb(0, 0, 0);
              background-color:rgb(25, 181, 254);
              border: none;
              border-radius: 15px;
              box-shadow: 0 9px #999;
      }
      button:hover{
              background-color: rgb(45, 233, 233);
                          cursor: pointer;
      }
      button:active {
              background-color:rgb(45, 233, 233);
              box-shadow: 0 5px #666;
              transform: translateY(4px);
      }
  
</style>
    <body>
        <header>
        <nav>
        <h3 class='decente'><a href="">Marmita.txt</a></h3>
        <li><a href="">Perfil</a></li>
        <li><a href="">Sair</a></li>
        </nav>
        <section>
            <div>
              <form action="perfil.php">
                        <label for="custo">Quanto custou?</label>
                        <br><br><input type="text" id="custo" name="custo"><br><br>
                        <label for="comprou">Quem comprou?</label>
                        <br><br><input type="text" id="comprou" name="comprou"><br><br>
                        <label for="pagou">Quem pagou para o motoboy?</label>
                        <br><br><input type="text" id="pagou" name="pagou"><br><br>
                        <label for="dia">Dia/Mês</label>
                        <br><br><input type="text" id="dia" name="dia"><br><br>
                        <button type="submit" value="Enviar">Enviar</button>
                  
                </form>
            </div>
      </section>
        <form action = "verlog.php" method = "$_POST">
       
        </body>
</html>     

                                                                    <!-- <form action="/action_page.php">
                                                                    
                                                                    <label for="fname">Quanto custou ?</label> -->
                                                                    <!-- <input type="text" id="fname" name="fname"><br><br>  -->
                                                                    <!-- <label for="lname">Quem comprou ?</label>
                                                                    <input type="text" id="lname" name="lname"><br><br>
                                                                    <br><button><input type="submit" value="Enviar"></button></br> -->
                                                  <!--  <div>
                                                                              <h2>Marmita do dia </h2> 
                                                                              <input type="text" placeholder="Quanto custou ?">
                                                                              <input type="text" placeholder="Quem comprou ?">
                                                                              <input type="text" placeholder="Quem Pagou ?">
                                                                              <input type="number" placeholder="Dia da compra/entrega ?">    
                                                                              </div> -->
        