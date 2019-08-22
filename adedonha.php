
<!doctype html>
<html lang="en">
<head>
    <title>Adedonha</title>
  <style type="text/css">
      body{
      font-family: Tahoma, Geneva, sans-serif;
      color: #fff;
      background: url(back.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
      h1{
      margin-top: 1px;
      text-align: center;
      color: #fff;
      font-size: 70px;
      }
      h2{
          margin-top: -10px;
          text-align: center;
          color: #fff;
          font-size: 20px;
      }
      form {
      margin: auto;
      width: 250px;
      margin-top: 60px;
      padding: 40px;
      border: 1px solid black;
      border-radius: 1em;
      border-collapse: collapse;
      }
      input{
          width: 200px;
          height: 50px;
          text-align: center;
          background: transparent;
          border: none;
          border-bottom: 1px solid #fff;
          font-family: 'play', sans-serif;
          font-size: 16px;
          font-weight: 200px;
          transition: border 0.5s;
          outline: none;
          color: #fff;
      }
      button {
          color: #000;
          border: none;
          width: 200px;
          background: #fff;
          font-size: 16px;
          line-height: 10px;
          padding: 10px 0;
          border-radius: 15px;
          cursor: pointer;
      }
      button:hover{
          color: #fff;
          background-color: black;
      }
      .container{
          display: flex;
          flex-direction: row;
          width: 100%;
      }
      ::placeholder {
          color: aliceblue;
          opacity: 0.8;
      }
      #sombrarredondada{
     background-color: rgba(44, 62, 80, 0.7);
     color: #000000;
     width: 200px;
     padding-left: 40px;
     -moz-border-radius: 1em;
     -webkit-border-radius: 1em;
      
     box-shadow: 15px -10px 3px #000;
     -webkit-box-shadow: 15px -10px 3px #000;
     -moz-box-shadow: 15px -10px 3px #000;
     }
     
    </style>
</head>
<body>
  
      <h1>
          Adedonha
      </h1>
      <?php 
          $nome = $_GET['nome'];
       ?>
    <form id="sombrarredondada" action="dados.php" action="jogo.php">
          <h2>Choice Your Nickname</h2>
          <input type="text" name="nome" required=" "  placeholder="NickName" ><br><br><br><br>
          <button type="submit" class="player" name="enviar">Play</button>
    </form>
</body>
  </html>