<!DOCTYPE html>
<html>
    <head>
        <title>Esqueci Senha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    </head>
    <body class="body_others">
        <header>
                <div class="divHeader">
                    <div class="header2">
                    	<div class="itens">
                            <h2 class="funcao_others" id="ed_disp1">Esqueci Senha</h2>
                        </div>
                    </div>
                </div>
        </header>
        <?php 
            require_once("models/conexao.php");

            $usuario=$_POST["usuario"];

            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT pergunta_usuario FROM usuario WHERE login_usuario=?";
            $q = $pdo->prepare($sql);
            $q->execute(array($usuario));
            $data = $q->fetch(PDO::FETCH_ASSOC);//atribui um array associativo a var data
            $pergunta_usuario = $data["pergunta_usuario"];

            if($pergunta_usuario == ''){
                header("Location: ./esqueci_senha2.php");
            }
            
            Database::disconnect();
        ?>
        <form name="esqueci_senha4" action="esqueci_senha4.php" method="POST">
            <div align="center">
                <div class="divInputs">
                    <div  id="teste">
                        <table>
                            <tr>
                                <td>Usuário:</td>
                                <td><input name="usuario" value="<?php echo $usuario ?>" readonly="readonly"></td>
                            </tr>
                            <tr>
                                <td>Pergunta:</td>
                                <td><textarea name= "perg_seg" class="txtarea" rows="3" cols="25" maxlength="245" readonly="readonly"><?php echo $pergunta_usuario ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Resposta:</td>
                                <td><textarea name= "resp_perg_seg" class="txtarea" rows="3" cols="25" maxlength="245" required></textarea></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn">Avançar</button>
                    </div>

                </div>
                </div>
        </form>
    </body>
</html>