<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="includes/imagens/icons/favicon.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="cascata.css">
	<title>Canis</title>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="#" style="cursor: default;"><i class="fas fa-bone" style="color: rgba(255,255,255,.65); font-size: 100%;"></i></a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link mb-0 h5 icone" href="index.php"><i class="fas fa-home" style="font-size: 100%; padding-right: 10px; color: #fff;"></i>Home</a>
			</li>
			<?php require 'includes/complementos/init.php'; ?>
			<?php if ($_SESSION['usuario'] == 'deslogado') { ?>
				<li class="nav-item">
					<a class="nav-link mb-0 h5 icone" href="includes/paginas/entrar.php"><i class="fas fa-door-closed antigo" style="font-size: 100%; margin-right: 10px;"></i><i class="fas fa-door-open novo" style="font-size: 110%; margin-right: 7.5px;"></i>Entrar</a>
				</li>
			<?php } ?>
			<?php if ($_SESSION['usuario'] == 'logado') { ?>
				<li class="nav-item">
					<a class="nav-link mb-0 h5 icone" href="includes/paginas/configurar.php"><i class="fas fa-user antigo" style="font-size: 100%; margin-right: 10px;"></i><i class="fas fa-user-cog novo" style="font-size: 100%; margin-right: 2.5px;"></i>Perfil</a>
				</li>
			<?php } ?>
			<li class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="includes/paginas/produtos_servicos.php"><i class="fas fa-shopping-cart antigo" style="font-size: 100%; padding-right: 10px;"></i><i class="fas fa-cart-plus novo" style="font-size: 100%; padding-right: 10px;"></i>Produtos e Serviços</a>
			</li>
			<li class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="includes/paginas/sobre.php" tabindex="-1" aria-disabled="true"><i class="fas fa-paw" style="font-size: 100%; padding-right: 10px;"></i>Sobre</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
		</form>
	</div>
</nav>
<div class="mb-5"></div>
<h1>OI</h1>
<h1>OI</h1>
<br>
<h1>OI</h1>
<br>
<h1>OI</h1>
<h1>OI</h1>
<br>
<h1>OI</h1>
<br>
<h1>OI</h1>
	<?php include "includes/complementos/footer.php"; ?>
	<script src="bootstrap/js/bootstrap.slim.js"></script>
	<script src="bootstrap/js/bootstrap.popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>