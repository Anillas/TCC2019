<?php
	$this->assign('title','Gerenciador do Banco de Dados - Canis | Home');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
?>

	

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>Gerenciador de Banco de Dados<i class="icon-thumbs-up"></i></h1>
			<p>Olá, mestre!! Você está na página de Administração do Banco de Dados. Aqui você tem controle total sobre o sistema da Canis.<br> Os clientes ou produtos podem ser acessados pelo menu superior.</p>
		</div>
	</div> <!-- /container -->

<?php
	$this->display('_Footer.tpl.php');
?>