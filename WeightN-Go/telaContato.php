<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <link href="css/capa.css" rel="stylesheet">
    <link href="css/telaCatraca.css" rel="stylesheet">
    <link href="css/telaLogin.css" rel="stylesheet">
    <script type="text/javascript" src="javaScript/menu.js"></script>
    <script type="text/javascript" src="javaScript/gallery.js"></script>
    
    <title>Weight n' Go - Fale Conosco</title>

  </head>
  <body>

    <!--Estrutura geral-->
    <div id="container">
        

      <!--Capa-->
      <div id="head">
        <img id="img_logo" src="imagens/restaurant.png" width="110" height="110">
        <p id="txt_capa" >Weight n' Go - Fale Conosco</p>
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
        <br>

        <img id="Img_gastos" src="Imagens/faleconosco.png" style="height: 300px;" width="650px">
          <div id="formulario_contato">
        <form action="/action_page.php">
          <label for="fname">Nome:</label><br>
          <input type="text" id="fname" name="fname"><br>
          <label for="lname">Mensagem:</label><br>
          <input type="text" id="lname" name="lname"><br><br>
          <input type="submit" value="Enviar">
        </form>
        </div>
      </div>

    <!--rodape-->
    <div id="rodape">
      <p>Weight n' Go  © 2021</p>
    </div>
    
  </body>
</html>