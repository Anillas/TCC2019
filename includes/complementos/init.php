<?php
	session_start();
	if(empty($_SESSION['usuario'])){
		$_SESSION['usuario'] = 'deslogado';
	}
	$_SESSION['usuario'];
?>