<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <link href="css/capa.css" rel="stylesheet">
    <link href="css/telaCatraca.css" rel="stylesheet">
    <link href="css/telaLogin.css" rel="stylesheet">
    <link href="css/telaCadastro.css" rel="stylesheet">
    <script type="text/javascript" src="javaScript/menu.js"></script>
    <script type="text/javascript" src="javaScript/gallery.js"></script>
    
    <title>Weight n' Go - Resgistre-se</title>

  </head>
  <body>

    <!--Estrutura geral-->
    <div id="container">
        

      <!--Capa-->
      <div id="head">
        <img id="img_logo" src="imagens/restaurant.png" width="110" height="110">
        <p id="txt_capa" >Weight n' Go - Resgistre-se</p>
        <a href="models/logout.php" id="sair_home"><img id="img_logof" src="imagens/Img_logof.jpg" width="60" height="60"></a>
      </div>


      <!--Menu-->
      <div id="menu">
          <ul id="menu_lista" >
            <li><a id="left_home" href="telaHome.php">Home</a ></li>
            <li><a href="telaCardapio.php">Cardápio</a></li>
            <li><a href="telaContato.php">Fale Conosco</a></li>
            <li><a href="telaCadastro.php">Registrar-se</a></li>
          </ul>
      </div>

      <!--Corpo-->
      <div id="corpo">

        <br><br>
        <div id="container2_cadastro">
          <div class="bg-img_cadastro">
            <form action="index.php" class="container">
              <h1>Registro</h1>
              <br>
              <label for="email"><b>Nome</b></label>
              <input type="text" placeholder="Enter Nome" name="email" required>

              <label for="psw"><b>Matricula</b></label>
              <input type="password" placeholder="Enter Matricula" name="psw" required>

              <label for="psw"><b>Senha</b></label>
              <input type="password" placeholder="Enter Senha" name="psw" required>

              <label for="psw"><b>Confirmar Senha</b></label>
              <input type="password" placeholder="Confirmar Senha" name="psw" required>


              <button type="submit" class="btn">Registrar</button>
            </form>
          </div>
        </div>
        

      </div>

    <!--rodape-->
    <div id="rodape">
      <p>Turnstiles Project © 2020 - 2020</p>
    </div>
    
  </body>
</html>