<?php
	require_once 'controle/init.php';
	require SITE_ROOT_CONTROLE.DS.'Controlador.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="incluir/imagens/icons/favicon.png">
	<link rel="stylesheet" href="incluir/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="incluir/font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="cascata.css">
	<title>Canis</title>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand navbar-dark bg-dark">
		<!--a class="navbar-brand" href="#" style="cursor: default;"><i class="fas fa-bone" style="color: rgba(255,255,255,.65); font-size: 100%;"></i></a-->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link mb-0 h5 icone" href="index.php"><i class="fas fa-home" style="font-size: 100%; padding-right: 10px; color: #fff;"></i>Home</a>
			</li>
			
			<?php if ($_SESSION['user'] == 'deslogado') { ?>
				<li class="nav-item">
					<a class="nav-link mb-0 h5 icone" href="incluir/paginas/entrar.php"><i class="fas fa-door-closed antigo" style="font-size: 100%; margin-right: 10px;"></i><i class="fas fa-door-open novo" style="font-size: 110%; margin-right: 7.5px;"></i>Entrar</a>
				</li>
			<?php } ?>
			<?php if ($_SESSION['user'] == 'logado') { ?>
				<li class="nav-item">
					<a class="nav-link mb-0 h5 icone" href="incluir/paginas/minha_conta.php"><i class="fas fa-user antigo" style="font-size: 100%; margin-right: 10px;"></i><i class="fas fa-user-cog novo" style="font-size: 100%; margin-right: 2.5px;"></i>Minha Conta</a>
				</li>
			<?php } ?>
			<li class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="incluir/paginas/produtos_servicos.php"><i class="fas fa-shopping-cart antigo" style="font-size: 100%; padding-right: 10px;"></i><i class="fas fa-cart-plus novo" style="font-size: 100%; padding-right: 10px;"></i>Produtos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="incluir/paginas/sobre.php" tabindex="-1" aria-disabled="true"><i class="fas fa-paw" style="font-size: 100%; padding-right: 10px;"></i>Sobre</a>
			</li>
		</ul>
		<!--form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
		</form-->
	</div>
</nav>

<?php
	mysqli_query($connect, "SET NAMES 'utf8'");
    mysqli_query($connect, 'SET character_set_connection=utf8');
    mysqli_query($connect, 'SET character_set_client=utf8');
    mysqli_query($connect, 'SET character_set_results=utf8');   
    $dataE = mysqli_query($connect, "SELECT * FROM `empresa`");
    $dataP = mysqli_fetch_array($dataE);
    $historia = $dataP['historia'];
    $objetivo = $dataP['objetivo'];
    $metodologia = $dataP['metodologia'];
?>


<div>
	<div class="parallaxA">
		<div class="justify-content-center dog" style="height: 900px;">
			<center>
				<div class="col-6 face" style="height: 900px;">
					<div class="olhos">
						<div class="olho">
							<div class="iris">
							</div>
						</div>
						<div class="olho">
							<div class="iris">
							</div>
						</div>
					</div>
				</div>
			</center>
		</div>
	</div>
	<div class="parallax">
		<div class="row justify-content-center mb-5">
			<div class="col-6 pt-5">
				<div class="card border-warning p-4" style="opacity: 0.85;">
					<h3>Nossa visão</h3>
					<h5>
					Amamos a todos os animais, sem exceção! E também sabemos que muitas pessoas possuem companheiros animais um tanto quanto diferente dos demais. Vendo que todos os pets merecem carinho, a Canis busca ajudar todos os donos a oferecer o melhor para seu amigo.
					</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="parallaxA">
		<div class="justify-content-center lhama" style="height: 600px;">
			<center>
					<div class="cara" style="height: 600px;">
					</div>
			</center>
		</div>
	</div>
</div>

	<script type="text/javascript">
		var iris = document.getElementsByClassName("iris");
		document.onmousemove = function(){
			var x = event.clientX * 100 / window.innerWidth + "%";
			var y = event.clientY * 100 / window.innerHeight + "%";
			for(var i=0;i<2;i++){
				iris[i].style.left = x;
				iris[i].style.top = y;
				iris[i].style.transform = "translate(-"+x+",-"+y+")";
			}
		}
	</script>
	<?php include "incluir/complementos/footer.php"; ?>
	<script src="incluir/bootstrap/js/bootstrap.slim.js"></script>
	<script src="incluir/bootstrap/js/bootstrap.popper.js"></script>
	<script src="incluir/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>