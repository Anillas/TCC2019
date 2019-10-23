<!DOCTYPE html>
<html>
<head>
	<?php include "../complementos/meta.php"; ?>
	<?php include "../complementos/link.php"; ?>
	<title>Entrar</title>
</head>
<body>
	<?php include "../complementos/menu_estatico.php"; ?>
	<?php include "../banco/cadastro_usuario.php" ?>
	<div class="mx-auto col-md-4">
		<div class="card" style="background-color: #343a40;">
  <?php include '../banco/login.php'; ?>
</div>
</div>
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
</body>
</html>