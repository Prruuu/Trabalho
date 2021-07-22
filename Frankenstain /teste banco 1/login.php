<?php
	session_start();
	include('conexao.php');

	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('Location: index.php');
		exit();
	}

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

	$result = pg_query($conexao, $query);
	echo($result);

	$row = pg_num_rows($result);

	if($row == 1) {
		$_SESSION['usuario'] = $usuario;
		header('Location: painel.php');
		exit();
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: index.php');
		exit();
	}