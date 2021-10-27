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
      <div id="corpo">
        <br><br>
        <div id="container2" align="center">
          <div class="bg-img">
            <form name="esqueci_senha3" action="esqueci_senha3.php" method="POST">
            <div id="divbt">
                        <table>
                            <tr>
                                <td style="color:black">Usuário:</td><br>
                                <td><input name= "usuario" id="inputarea" maxlength="50" autofocus required></td>
                            </tr>
                        </table><br><br>
                        <h4 style="color:red">Usuário incorreto</h4><br><br>
                        <button type="submit" class="btn">Recuperar senha</button>
                    </div>
            </form>
          </div>
        </div>
      </div>

    <!--rodape-->
    <div id="rodape">
      <p>Católica de Santa Catarina</p>
    </div>
    
  </body>
</html>