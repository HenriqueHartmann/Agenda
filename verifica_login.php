<?php
	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];
    echo $email;
    echo "<br>";
    echo $senha;

	$usuarios = file_get_contents('Cadastro.Json');
	$usuarios = json_decode($usuarios, true);

	$usuario_existe = false;

    foreach ($usuarios as $usuario){

        //colar aqui o if
        if ($email == $usuario['email'] && $senha == $usuario['senha']) {
            
            $usuario_existe = true;
            //deu certo;
            $_SESSION['usuario_email']  = $email;
            $_SESSION['usuario_senha']  = $senha;
            $_SESSION['usuario_online'] = true;

            //redirecionar
            header('Location: index.phtml');

        }
    }

    if ($usuario_existe == false){
        header('Location: login.php');
    }