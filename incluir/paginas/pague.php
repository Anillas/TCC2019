<?php
	require_once '../../controle/init.php';
	require SITE_ROOT_CONTROLE.DS.'Controlador.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include LIB_COMPLEMENTOS.DS.'head.php'; ?>
</head>
<body>
	<?php
		$_SESSION['reservas'] = array();
		header("refresh: 3; ../../index.php");
	?>
	<center>
	<div class="mx-auto my-5 col-md-4">
		<div class="card" style="background-color: #343a40;">
  <div class="card-header">
    <h5 class="text-success">
    	Aguarde!! Seu pedido está sendo processado.
    </h5>
  </div>
  <div class="card-body">
  	<p class="text-warning">
	Enviaremos os produtos para o endereço fornecido por você no seu cadastro!!
</p>
</div>
</div>
</div>
</center>
</body>
</html>