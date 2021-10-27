<?php
	require_once("conexao.php");
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  	$senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
  	if (validaUsuario($usuario, $senha) == true) {
  		$_SESSION["esqueciSenha"]=0;
    	header("Location: ../telaHome.php?id=1");
  	} else {
    	errouSenha();
    }
}
?>