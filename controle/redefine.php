<?php
	include_once 'init.php';
	$_SESSION['nomeUsuario'] = 'nomeUsuario';
	$_SESSION['sobrenomeUsuario'] = 'sobrenomeUsuario';
	$_SESSION['telefoneUsuario'] = 'telefoneUsuario';
	$_SESSION['cpfUsuario'] = 'cpfUsuario';
	$_SESSION['usuario'] = 'usuario';
	$_SESSION['cepUsuario'] = 'cepUsuario';
	$_SESSION['estadoUsuario'] = 'estadoUsuario';
	$_SESSION['cidadeUsuario'] = 'cidadeUsuario';
	$_SESSION['bairroUsuario'] = 'bairroUsuario';
	$_SESSION['logradouroUsuario'] = 'logradouroUsuario';
	$_SESSION['numeroUsuario'] = 'numeroUsuario';
	$_SESSION['user'] = 'deslogado';
	$_SESSION['admin'] = 'deslogado';
	$_SESSION['dba'] = 'desativado';
	$redefine_sql = "TRUNCATE TABLE 'reserva'";
	mysqli_query($connect,$redefine_sql);
	header('Location: ../index.php');
?>