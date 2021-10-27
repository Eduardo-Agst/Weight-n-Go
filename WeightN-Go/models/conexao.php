<?php
class Database{
	private static $dbName = 'weightNgo' ; 
	private static $dbHost = 'localhost' ;
	private static $dbUsername = 'root';
	private static $dbUserPassword = '';
	
	private static $cont  = null;
	
	public function __construct(){
		exit('Init function is not allowed');//função de inicialização não é permitida
	}
	
	public static function connect(){
	   // uma conexão para toda a aplicação
       if ( null == self::$cont ){      
        //tratamento de exceção
        try{
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
          self::$cont->exec("set names utf8"); 
        }Catch(PDOException $e){
          die($e->getMessage());  //fecha a conexão e exibe a mensagem de erro
        }
       } 
       return self::$cont;
	}
	
	public static function disconnect(){
		self::$cont = null; //encerra a conexão com o banco
	}
}

function expulsaVisitante() {
  unset($_SESSION);
  header("Location: ../index.php");
  session_destroy();
}

function errouSenha() {
  unset($_SESSION);
  header("Location: ../erroLogin.php");
  session_destroy();
}

function validaUsuario($usuario, $senha) {
	$pdo=Database::connect();
	$sql = "SELECT id_usuario, nome_usuario,acesso_id_acesso FROM usuario WHERE login_usuario='".$usuario."' AND password_usuario='".$senha."';";
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$q=$pdo->prepare($sql);
	$q->execute();
	$resultado=$q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
  	if (empty($resultado)) {
    	return false;
  	}else{
  		session_start();
	    $_SESSION['usuarioID'] = $resultado['id_usuario'];
	    $_SESSION['usuarioNome'] = $resultado['nome_usuario'];
	    $_SESSION['usuarioLogin'] = $usuario;
	    $_SESSION['usuarioSenha'] = $senha;
	    $_SESSION['acesso'] = $resultado['acesso_id_acesso'];
	    return true;
  	}
}

function protegePagina() {
	if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
	// Não há usuário logado, manda pra página de login
	expulsaVisitante();
	} else if (!isset($_SESSION['usuarioID']) OR !isset($_SESSION['usuarioNome'])) {
		// Há usuário logado, verifica se precisa validar o login novamente
		header("Location: ../telaHome.php?id=1");
		// Verifica se os dados salvos na sessão batem com os dados do banco de dados
		if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
		// Os dados não batem, manda pra tela de login
		expulsaVisitante();
		}else{
			header("Location: ../index.php?id=1");
		}
	}
}

function logout(){
	unset($_SESSION);
	header("Location: ../index.php");
}
?>