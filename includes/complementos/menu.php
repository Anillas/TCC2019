<?php $linkAtivo = basename($_SERVER['SCRIPT_NAME']); ?>
<nav class="navbar fixed-top navbar-expand navbar-dark bg-dark">
	<a <?php if($linkAtivo == "produtos_servicos.php"){echo 'style="cursor: pointer" id="sidebarCollapse"';}else{echo 'style="cursor: default;"';} ?> class="navbar-brand" href="#"><span><i <?php if($linkAtivo == "produtos_servicos.php"){echo 'style="font-size: 100%; color: #fff; transform: rotate(90deg);"';}else{echo 'style="color: rgba(255,255,255,.65); font-size: 100%;"';} ?> class="fas fa-bone"></i></span>
	</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li <?php if($linkAtivo == "index.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="../../index.php"><i <?php if($linkAtivo == "index.php"){echo 'style="color: #fff; font-size: 100%; margin-right: 10px;"';} ?> class="fas fa-home" style="font-size: 100%; margin-right: 10px;"></i>Home</a>
			</li>
			<li <?php if($linkAtivo == "entrar.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="entrar.php"><i <?php if($linkAtivo == "entrar.php"){echo 'style="color: #fff; font-size: 100%; margin-right: 10px;"';} ?> class="fas fa-door-closed antigo" style="font-size: 100%; margin-right: 10px;"></i><i <?php if($linkAtivo == "entrar.php"){echo 'style="color: #fff; font-size: 110%; padding-right: 7.5px;"';} ?> class="fas fa-door-open novo" style="font-size: 110%; margin-right: 7.5px;"></i>Entrar</a>
			</li>
			<li <?php if($linkAtivo == "produtos_servicos.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="produtos_servicos.php"><i <?php if($linkAtivo == "produtos_servicos.php"){echo 'style="color: #fff; font-size: 100%; margin-right: 10px;"';} ?> class="fas fa-shopping-cart antigo" style="font-size: 100%; margin-right: 10px;"></i><i <?php if($linkAtivo == "produtos_servicos.php"){echo 'style="color: #fff; font-size: 100%; margin-right: 10px;"';} ?> class="fas fa-cart-plus novo" style="font-size: 100%; margin-right: 10px;"></i>Produtos e Serviços</a>
			</li>
			<li <?php if($linkAtivo == "sobre.php"){echo 'class="active"';} ?> class="nav-item">
				<a class="nav-link mb-0 h5 icone" href="sobre.php" tabindex="-1" aria-disabled="true"><i <?php if($linkAtivo == "sobre.php"){echo 'style="color: #fff; font-size: 100%; margin-right: 10px;"';} ?> class="fas fa-paw" style="font-size: 100%; margin-right: 10px;"></i>Sobre</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
		</form>
	</div>
</nav>
<div class="mb-5"></div>