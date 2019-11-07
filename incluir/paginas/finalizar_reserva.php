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
	<?php include "../complementos/menu.php"; ?>
	<div class="mx-auto col-md-4">
		<div class="card" style="background-color: #343a40;">
			<div class="card-header">
				<h5 class="text-success">
					Cadastro realizado com sucesso!
				</h5>
			</div>
			<div class="card-body">
				<p class="text-warning">
					Obrigado por se registrar na Canis!!<br>Aproveite nossa área de personalização e se sinta a vontade para contatar o suporte.
				</p>
			</div>
		</div>
	</div>
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
</body>
</html>