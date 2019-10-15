<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="includes/images/icons/favicon.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="cascata.css">
	<title>Canis</title>
</head>
<body>
	<?php $linkAtivo = basename($_SERVER['SCRIPT_NAME']); ?>
	<nav class="navbar fixed-top navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="#" style="cursor: default;"><i class="fas fa-bone" style="color: rgba(255,255,255,.65); font-size: 100%;"></i></a>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li <?php if($linkAtivo == "index.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="index.php"><i <?php if($linkAtivo == "index.php"){echo 'style="color: #fff; font-size: 100%; padding-right: 10px;"';} ?> class="fas fa-home" style="font-size: 100%; padding-right: 10px;"></i>Home</a>
			</li>
			<li <?php if($linkAtivo == "entrar.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="includes/pages/entrar.php"><i <?php if($linkAtivo == "entrar.php"){echo 'style="color: #fff; font-size: 100%; padding-right: 10px;"';} ?> class="fas fa-door-closed antigo" style="font-size: 100%; padding-right: 10px;"></i><i <?php if($linkAtivo == "entrar.php"){echo 'style="color: #fff; font-size: 110%; padding-right: 7.5px;"';} ?> class="fas fa-door-open novo" style="font-size: 110%; padding-right: 7.5px;"></i>Entrar</a>
			</li>
			<li <?php if($linkAtivo == "produtos_servicos.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="includes/pages/produtos_servicos.php"><i <?php if($linkAtivo == "produtos_servicos.php"){echo 'style="color: #fff; font-size: 100%; padding-right: 10px;"';} ?> class="fas fa-shopping-cart antigo" style="font-size: 100%; padding-right: 10px;"></i><i <?php if($linkAtivo == "produtos_servicos.php"){echo 'style="color: #fff; font-size: 100%; padding-right: 10px;"';} ?> class="fas fa-cart-plus novo" style="font-size: 100%; padding-right: 10px;"></i>Produtos e Serviços</a>
			</li>
			<li <?php if($linkAtivo == "sobre.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="includes/pages/sobre.php" tabindex="-1" aria-disabled="true"><i <?php if($linkAtivo == "sobre.php"){echo 'style="color: #fff; font-size: 100%; padding-right: 10px;"';} ?> class="fas fa-paw" style="font-size: 100%; padding-right: 10px;"></i>Sobre</a>
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
	<?php include "includes/complements/footer.php"; ?>
	<script src="bootstrap/js/bootstrap.slim.js"></script>
	<script src="bootstrap/js/bootstrap.popper.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>