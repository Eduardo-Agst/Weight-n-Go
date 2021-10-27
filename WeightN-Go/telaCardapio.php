<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <link href="css/capa.css" rel="stylesheet">
    <link href="css/telaCatraca.css" rel="stylesheet">
    <link href="css/telaLogin.css" rel="stylesheet">
    <script type="text/javascript" src="javaScript/menu.js"></script>
    <script type="text/javascript" src="javaScript/gallery.js"></script>
    
    <title>Weight n' Go - Cardápio</title>

  </head>
  <body>

    <!--Estrutura geral-->
    <div id="container">
        

      <!--Capa-->
      <div id="head">
        <img id="img_logo" src="imagens/restaurant.png" width="110" height="110">
        <p id="txt_capa" >Weight n' Go - Cardápio</p>
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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<br><br>
<div class="container">

    <body>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Imagens/carrossel-1.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Imagens/carrossel-2.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Imagens/carrossel-3.jpg" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <br>
        <hr>
        <h1><strong>Cardápio</strong></h1><br>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty1.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Camarão em Crosta</h5>
                    <p class="card-text">Camarões em crosta de pão de alho. 
                        Acompanha salada de alface americana, tomate, azeitona verde, palmito, pimentão e cebola. 
                        Acompanha e risoto de limão siciliano.
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 15 minutos atrás</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty2.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Paillard de Filé Mignon</h5>
                    <p class="card-text">Finíssimo corte de filé mignon, sobre espaguete italiano, 
                        folhas de espinafre e delicioso molho Alfredo.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 7 minutos atrás</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty3.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Filé Três Pimentas</h5>
                    <p class="card-text">04 medalhões de filé com bacon, grelhados, 
                        flambados com conhaque e molho cremoso de três pimentas (verde, rosa e preta). 
                        Acompanha batata recheada e arroz à grega.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 3 minutos atrás</small>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty4.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Filé à Parmegiana</h5>
                    <p class="card-text">Filé mignon à milanesa envoltos em molho caseiro de tomate fresco e gratinado 
                        com queijos mussarela e parmesão. Servido com espaguete no próprio molho ou 
                        com arroz branco e batatas fritas.

.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 13 minutos atrás</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty5.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Costela Suina</h5>
                    <p class="card-text">Suculenta costela suína, servida com molho barbecue e batatas fritas. 
                        Acompanha arroz branco.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 3 minutos atrás</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty6.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Escondidinho de Palmito</h5>
                    <p class="card-text">Palmitos picados refogados com pimentões e catupiry. 
                        Coberto com massa ao forno.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Menos de um minuto</small>
                </div>
            </div>
        </div>
        <br><br>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty7.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Escondidinho de Camarão</h5>
                    <p class="card-text">Camarões refogados com cebola, salsinha, nata e catupiry, 
                        coberto com purê de macaxeira e gratinado com queijo parmesão.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 26 minutos atrás</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty8.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Salada Caesar de Frango</h5>
                    <p class="card-text">Alface americana, frango grelhado fatiado, parmesão ralado, 
                        molho caesar e croûtons. Servida na casquinha de pizza.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 63 minutos atrás</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="Imagens/nasty9.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Lagosta Imperial</h5>
                    <p class="card-text">Lagosta inteira grelhada, envolvida em delicioso molho thermidor 
                        à base de mostarda e gratinada com queijo muçarela e queijo parmesão. 
                        Acompanha risoto de limão siciliano e batata chips</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Atualizados 34 minutos atrás</small>
                </div>
            </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>
<br><br>
<footer>
<!--rodape-->
<div id="rodape">
      <p>Weight n' Go - Católica de Santa Catarina</p>
    </div>
    
  </body>
</html>
</footer>
</div>