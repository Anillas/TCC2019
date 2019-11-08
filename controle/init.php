<?php
	session_start();
	if(empty($_SESSION['nomeUsuario'])){
		$_SESSION['nomeUsuario'] = 'nomeUsuario';
	}
	if(empty($_SESSION['sobrenomeUsuario'])){
		$_SESSION['sobrenomeUsuario'] = 'sobrenomeUsuario';
	}
	if(empty($_SESSION['telefoneUsuario'])){
		$_SESSION['telefoneUsuario'] = 'telefoneUsuario';
	}
	if(empty($_SESSION['cpfUsuario'])){
		$_SESSION['cpfUsuario'] = 'cpfUsuario';
	}
	if(empty($_SESSION['usuario'])){
		$_SESSION['usuario'] = 'usuario';
	}
	if(empty($_SESSION['cepUsuario'])){
		$_SESSION['cepUsuario'] = 'cepUsuario';
	}
	if(empty($_SESSION['estadoUsuario'])){
		$_SESSION['estadoUsuario'] = 'estadoUsuario';
	}
	if(empty($_SESSION['cidadeUsuario'])){
		$_SESSION['cidadeUsuario'] = 'cidadeUsuario';
	}
	if(empty($_SESSION['bairroUsuario'])){
		$_SESSION['bairroUsuario'] = 'bairroUsuario';
	}
	if(empty($_SESSION['logradouroUsuario'])){
		$_SESSION['logradouroUsuario'] = 'logradouroUsuario';
	}
	if(empty($_SESSION['numeroUsuario'])){
		$_SESSION['numeroUsuario'] = 'numeroUsuario';
	}
	if(empty($_SESSION['user'])){
		$_SESSION['user'] = 'deslogado';
	}
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	define('SITE_ROOT',ROOT.DS.'TCC2019');
	define('SITE_ROOT_CONTROLE',SITE_ROOT.DS.'controle');
	define('SOURCE_BUSCAR',SITE_ROOT_CONTROLE.DS.'buscar');
	define('SOURCE_MOSTRAR',SITE_ROOT_CONTROLE.DS.'mostrar');
	define('SOURCE_SELECIONAR',SITE_ROOT_CONTROLE.DS.'selecionar');
	define('SITE_ROOT_INCLUIR',SITE_ROOT.DS.'incluir');
	define('LIB_BANCO',SITE_ROOT_INCLUIR.DS.'banco');
	define('LIB_BOOTSTRAP',SITE_ROOT_INCLUIR.DS.'bootstrap');
	define('LIB_COMPLEMENTOS',SITE_ROOT_INCLUIR.DS.'complementos');
	define('LIB_FONT-AWESOME',SITE_ROOT_INCLUIR.DS.'font-awesome');
	define('LIB_IMAGENS',SITE_ROOT_INCLUIR.DS.'imagens');
	define('LIB_JQUERY',SITE_ROOT_INCLUIR.DS.'jQuery');
	define('LIB_MDBOOTSTRAP',SITE_ROOT_INCLUIR.DS.'mdbootstrap');
	define('LIB_PAGINAS',SITE_ROOT_INCLUIR.DS.'paginas');
	$linkAtivo = basename($_SERVER['SCRIPT_NAME']);
	require 'conexao.php';
	if(empty($_SESSION['reservas'])){
		$_SESSION['reservas'] = array();
	}
?>