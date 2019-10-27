<?php
	session_start();
	if(empty($_SESSION['usuario'])){
		$_SESSION['usuario'] = 'deslogado';
	}
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	define('SITE_ROOT',ROOT.DS.'TCC2019');
	define('SITE_ROOT_CONTROLE',SITE_ROOT.DS.'controle');
	define('SOURCE_BUSCAR',SITE_ROOT_CONTROLE.DS.'buscar');
	define('SOURCE_SELECIONAR',SITE_ROOT_CONTROLE.DS.'selecionar');
	define('SITE_ROOT_INCLUIR',SITE_ROOT.DS.'incluir');
	define('LIB_BANCO',SITE_ROOT_INCLUIR.DS.'banco');
	define('LIB_BOOTSTRAP',SITE_ROOT_INCLUIR.DS.'bootstrap');
	define('LIB_COMPLEMENTOS',SITE_ROOT_INCLUIR.DS.'complementos');
	define('LIB_FONT-AWESOME',SITE_ROOT_INCLUIR.DS.'font-awesome');
	define('LIB_IMAGENS',SITE_ROOT_INCLUIR.DS.'imagens');
	define('LIB_JQUERY',SITE_ROOT_INCLUIR.DS.'jQuery');
	define('LIB_PAGINAS',SITE_ROOT_INCLUIR.DS.'paginas');
	$linkAtivo = basename($_SERVER['SCRIPT_NAME']);
?>