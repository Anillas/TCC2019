<?php
	$db_host = "localhost";
	$db_nome = "banco";
	$db_usuario = "root";
	$db_senha = "";
	$connect = mysqli_connect($db_host,$db_usuario,$db_senha,$db_nome);
	$nomeUsuario = $_POST['nomeUsuario'];
	$sobrenomeUsuario = $_POST['sobrenomeUsuario'];
	$telefoneUsuario = $_POST['telefoneUsuario'];
	$novoUsuario = $_POST['novoUsuario'];
	$novaSenha = $_POST['novaSenha'];
	$cidadeUsuario = $_POST['cidadeUsuario'];
	$estadoUsuario = $_POST['estadoUsuario'];
	$cepUsuario = $_POST['cepUsuario'];
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