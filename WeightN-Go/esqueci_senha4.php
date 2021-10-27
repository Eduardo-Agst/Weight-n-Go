<?php 
	require_once("models/conexao.php");

    $usuario= $_POST["usuario"];
    $resposta = $_POST["resp_perg_seg"];

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario WHERE login_usuario=?";
    $q = $pdo->prepare($sql);
    $q->execute(array($usuario));
    $data = $q->fetch(PDO::FETCH_ASSOC);//atribui um array associativo a var data
    $resposta_usuario = $data["resposta_usuario"];
    $nome_usuario = $data["nome_usuario"];
    $acesso= $data["acesso_id_acesso"];
    $id_usuario = $data["id_usuario"];
    $senha=$data["password_usuario"];
    $email=$data["email_usuario"];
    $login_usuario = $data["login_usuario"];

    error_reporting(E_ALL);
        
    if($resposta_usuario==$resposta){
        session_start();
        $_SESSION['usuarioID'] = $data['id_usuario'];
        $_SESSION['usuarioNome'] = $data['nome_usuario'];
        $_SESSION['usuarioLogin'] = $login_usuario;
        $_SESSION['usuarioSenha'] = $senha;
        $_SESSION['acesso'] = $data['acesso_id_acesso'];
        header("Location:telaHome.php");
    }
     

    Database::disconnect();
?>