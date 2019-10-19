<?php
	require 'conexao.php';
	$nomeUsuario = isset($_POST["nomeUsuario"]) ? trim($_POST["nomeUsuario"]) : FALSE;
	$sobrenomeUsuario = isset($_POST["sobrenomeUsuario"]) ? trim($_POST["sobrenomeUsuario"]) : FALSE;
	$telefoneUsuario = isset($_POST["telefoneUsuario"]) ? ($_POST["telefoneUsuario"]) : FALSE;
	$novoUsuario = isset($_POST["novoUsuario"]) ? trim($_POST["novoUsuario"]) : FALSE;
	$novaSenha = isset($_POST["novaSenha"]) ? md5($_POST["novaSenha"]) : FALSE;
	$cidadeUsuario = isset($_POST["cidadeUsuario"]) ? trim($_POST["cidadeUsuario"]) : FALSE;
	$estadoUsuario = isset($_POST["estadoUsuario"]) ? trim($_POST["estadoUsuario"]) : FALSE;
	$cepUsuario = isset($_POST["cepUsuario"]) ? ($_POST["cepUsuario"]) : FALSE;
	/*if (!$connect){
    	die("Connection failed: " . mysqli_connect_error());
	}*/
	//echo "Connected successfully";
	$sql_insert_cadastro = "INSERT INTO `cadastro`(`nomeUsuario`, `sobrenomeUsuario`, `telefoneUsuario`, `novoUsuario`, `novaSenha`, `cidadeUsuario`, `estadoUsuario`, `cepUsuario`) VALUES ('$nomeUsuario','$sobrenomeUsuario','$telefoneUsuario','$nomeUsuario','$novaSenha','$cidadeUsuario','$estadoUsuario','$cepUsuario')";
	/*if () {
      echo "New record created successfully";
	} else {
	      echo "Error: " . $sql_insert_cadastro . "<br>" . mysqli_error($connect);
	}*/
	mysqli_query($connect, $sql_insert_cadastro);
	$sql_insert_acesso = "INSERT INTO `login`(`usuario`, `senha`) VALUES ('$novoUsuario','$novaSenha')";
	mysqli_query($connect, $sql_insert_acesso);
	mysqli_close($connect);
?>