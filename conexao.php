<?php
	function novaConexao($banco = 'locadora'){
		$servidor = 'localhost:3306';
		$usuario= 'root';
		$senha= '';
		
		$conexao = new mysqli($servidor,$usuario,$senha,$banco);

		if($conexao->connect_error){
			die('Error: '.connect_error);
		}
		return $conexao;
		
	}
?>