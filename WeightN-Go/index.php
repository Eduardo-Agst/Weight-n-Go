<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <link href="css/capa.css" rel="stylesheet">
    <link href="css/telaLogin.css" rel="stylesheet">
    <script type="text/javascript" src="JavaScript/Menu.js"></script>
    <script type="text/javascript" src="JavaScript/Galery.js"></script>
    
    <title>Weight n' Go</title>

  </head>
  <body>

    <!--Estrutura geral-->
    <div id="container">
        

      <!--Capa-->
      <div id="head">
        <img id="img_logo" src="Imagens/restaurant.png" width="110" height="110">
        <p id="txt_capa" >Weight n' Go</p>
      </div>


      <!--Menu-->
      <div id="menu">
        <ul id="menu_lista" >
        </ul>
      </div>

      <!--Corpo-->
      <form method="POST" name="login" id="login" action="models/loga.php">
      <div id="corpo">
        <br><br>
        <div id="container2" align="center">
          <div class="bg-img">
            <form action="index.php" class="container">
              <label style="color:black" for="email"><b>Usuário</b></label>
              <input name="usuario" id="login_usuario" class="inputLogin" type="text" placeholder="usuário" autofocus required>
              <label style="color:black" for="psw"><b>Senha</b></label>
              <input name="senha" id="login_senha" class="inputLogin" type="password" placeholder="senha" required>
              <button type="submit" class="btn">Login</button>
              <br><br><br>
              <h4 id="esqueci"><a href="esqueci_senha.php" id="esqueci_senha">Esqueci minha senha</a></h4><!--precisa trocar o arquivo de esqueci a senha-->
            </form>
          </div>
        </div>
      </div>
      </form>

    <!--rodape-->
    <div id="rodape">
      <p>Católica de Santa Catarina</p>
    </div>
    
  </body>
</html>