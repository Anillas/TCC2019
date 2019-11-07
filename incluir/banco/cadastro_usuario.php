<?php
	$nomeUsuario = isset($_POST["nomeUsuario"]) ? trim($_POST["nomeUsuario"]) : FALSE;
	$sobrenomeUsuario = isset($_POST["sobrenomeUsuario"]) ? trim($_POST["sobrenomeUsuario"]) : FALSE;
	$telefoneUsuario = isset($_POST["telefoneUsuario"]) ? ($_POST["telefoneUsuario"]) : FALSE;
	$cpfUsuario = isset($_POST["cpfUsuario"]) ? ($_POST["cpfUsuario"]) : FALSE;
	$usuario = isset($_POST["usuario"]) ? trim($_POST["usuario"]) : FALSE;
	$senha = isset($_POST["senha"]) ? md5($_POST["senha"]) : FALSE;
	$cepUsuario = isset($_POST["cepUsuario"]) ? ($_POST["cepUsuario"]) : FALSE;
	$estadoUsuario = isset($_POST["estadoUsuario"]) ? trim($_POST["estadoUsuario"]) : FALSE;
	$cidadeUsuario = isset($_POST["cidadeUsuario"]) ? trim($_POST["cidadeUsuario"]) : FALSE;
	$bairroUsuario = isset($_POST["bairroUsuario"]) ? trim($_POST["bairroUsuario"]) : FALSE;
	$logradouroUsuario = isset($_POST["logradouroUsuario"]) ? trim($_POST["logradouroUsuario"]) : FALSE;
	$numeroUsuario = isset($_POST["numeroUsuario"]) ? ($_POST["numeroUsuario"]) : FALSE;
	$sql_insert_cadastro = "INSERT INTO `usuarios` (`nomeUsuario`, `sobrenomeUsuario`, `telefoneUsuario`, `cpfUsuario`, `usuario`, `senha`, `cepUsuario`, `estadoUsuario`, `cidadeUsuario`, `bairroUsuario`, `logradouroUsuario`, `numeroUsuario`) VALUES ('$nomeUsuario','$sobrenomeUsuario','$telefoneUsuario','$cpfUsuario','$usuario','$senha','$cepUsuario','$estadoUsuario','$cidadeUsuario','$bairroUsuario','$logradouroUsuario','$numeroUsuario')";
	mysqli_query($connect, $sql_insert_cadastro);
	mysqli_close($connect);
?>