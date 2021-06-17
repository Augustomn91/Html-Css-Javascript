<?php 

	session_start();
	include_once 'conexao.php';	
	
	if(empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('Location: index.php');
		exit();
	} 
	
	
	$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
	$senha = mysqli_real_escape_string($connect, $_POST['senha']);
	
	$query = "SELECT id, login FROM usuarios WHERE login = '{$usuario}' AND senha = md5('{$senha}')";
	
	
	$resultado = mysqli_query($connect, $query);
	
	$row = mysqli_num_rows($resultado);
	
	if($row == 1) {
		$_SESSION['usuario'] = $usuario;
		header('Location: painel.php');
		exit();
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: index.php');
		exit();
	}
?>