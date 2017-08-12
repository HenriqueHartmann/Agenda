<?php
	function cadastrar(){
		
		$contatoAuxiliar = file_get_contents('Cadastro.Json');
		$contatoAuxiliar = json_decode($contatoAuxiliar, true);

		$cadastros = [
			'id'         => uniqid(),
			'nome'       => $_POST['nome'],
			'email'      => $_POST['email'],
			'senha'      => $_POST['senha'],
			'confirmar'  => $_POST['confirmar']
		];

		array_push($contatoAuxiliar, $cadastros);

		$cadastrosJson = json_encode($contatoAuxiliar, JSON_PRETTY_PRINT);
		
		file_put_contents('Cadastro.Json', $cadastrosJson);

		header("Location: login.php");

	}

	if($_GET['acao'] == 'cadastrar'){
            cadastrar();
	}
?>