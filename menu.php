<!DOCTYPE html>
<html>
 <head>
      <meta charset="utf-8">
      <title>Marmi.txt</title>
 </head>
 <body>
   <nav>
        <h1><br><a href="">Marmita.txt<br></a></h1><br>
        <h3><a href="">Perfil</a></h3>
        <h3><a href="">Sair</a></h3>
   </nav>
      <section>
        <div>
          <form action = "formula.php" method = "POST" id='formMarmita'>   
               <label for="custo"class="inputUser" >Quanto custou?</label>
                  <br><br><input type="text" id="custo" name="custo" class="inputUser" required><br><br>
               <label for="comprou" class="inputUser" >Quem comprou?</label>
                  <br><br><input type="text" id="comprou" name="comprou" class="inputUser" required><br><br>
               <label for="pagou" class="inputUser" >Quem pagou para o motoboy?</label>
                  <br><br><input type="text" id="pagou" name="pagou" class="inputUser" required><br><br>
               <label for="dia" class="inputUser" >Dia/Mês</label>
                  <br><br><input type="date" id="dia" name="dia" class="inputUser" required>
               <button type="submit" value="Enviar">Enviar</button>
          </form>
        </div>
      </section>
  </body>
</html>
<script>
document.getElementById('#formMarmita').value
axios.post('localhost:5000')

</script>
<style>
/* CSS */
/* margem top */
      * {
          margin: 0;
          padding: 0;
        }
        body{
          font-family: Monospace,Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(41, 187, 187), rgb(23, 46, 68));
        }
        a {
          color: rgb(255, 255, 255);
          text-decoration: none;
          transition: 0.1s;
          color: #fff;
        }
      a:hover {
          opacity: 0.7;
        }
      nav {
          display: flex;
          justify-content: space-around;
          align-items: center;
          font-family: Monospace, Arial, sans-serif;
          background: rgb(0, 0, 0);
          height: 8vh;
      }
      body{
          font-family: Monospace,Arial, Helvetica, sans-serif;
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
            padding: 20px;
            border: none;
            outline: none;
            font-size: 25px; 
            border-radius: 10px;
      }
      h1{
          color: rgb(255, 255, 255);
          text-decoration: none;
          transition: 0.3s;
          background-color: rgb(25, 181, 254);
          margin: 10px;
          top:20%;
          height: 100%;
          padding: 30px;
          border-radius: 15px;
          color: #fff;
      }
      button{

              display: inline-block;
              padding: 10px 30px;
              font-size: 25px;
              cursor: pointer;
              text-align: center;	
              text-decoration: none;
              outline: none;
              color: rgb(255, 255, 255);
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