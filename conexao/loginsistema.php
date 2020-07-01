<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])){
		$login= mysqli_real_escape_string($conn, $_POST['login']); 
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
		$result_usuario = "SELECT * FROM aut_usuarios WHERE login = '$login' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		var_dump(empty($resultado));

		if (empty($resultado)) { 
			header("Location:http://localhost/TrabalhoWeb/login.php"); 
			die;
	   }

		header("Location:http://localhost/TrabalhoWeb/cadastrolocacao.html");

	}else {
		$_SESSION['loginErro']= "Usuário ou senha inválido";
  
		header("Location:http://localhost/TrabalhoWeb/login.php");
	}
?>