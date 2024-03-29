<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-Frame-Options" content="deny">
		<base href="<?php $this->eprint($this->ROOT_URL); ?>" />
		<title><?php $this->eprint($this->title); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Gerenciador do Banco de Dados - Canis" />
		<meta name="author" content="phreeze builder | phreeze.com" />

		<!-- Le styles -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="styles/style.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="bootstrap/css/font-awesome.min.css" rel="stylesheet" />
		<!--[if IE 7]>
		<link rel="stylesheet" href="bootstrap/css/font-awesome-ie7.min.css">
		<![endif]-->
		<link href="bootstrap/css/datepicker.css" rel="stylesheet" />
		<link href="bootstrap/css/timepicker.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap-combobox.css" rel="stylesheet" />
		<link rel="stylesheet" href="../incluir/font-awesome/css/all.min.css">
		<link href="../cascata.css" rel="stylesheet" />
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

		<script type="text/javascript" src="scripts/libs/LAB.min.js"></script>
		<script type="text/javascript">
			$LAB.script("//code.jquery.com/jquery-1.8.2.min.js").wait()
				.script("bootstrap/js/bootstrap.min.js")
				.script("bootstrap/js/bootstrap-datepicker.js")
				.script("bootstrap/js/bootstrap-timepicker.js")
				.script("bootstrap/js/bootstrap-combobox.js")
				.script("scripts/libs/underscore-min.js").wait()
				.script("scripts/libs/underscore.date.min.js")
				.script("scripts/libs/backbone-min.js")
				.script("scripts/app.js")
				.script("scripts/model.js").wait()
				.script("scripts/view.js").wait()
		</script>
		<style type="text/css">
			.navbar {
			    position: fixed;
			    top: 0;
			    right: 0;
			    left: 0;
			    z-index: 1030;
			    padding: 8px 16px;
			    background-color: #000;
			}
			.navbar-inner{
				background-color: transparent!important;
			}
			.navbar-collapse{
				background-color: transparent!important;
			}
			.h5{
				font-size: 1.25rem!important;
			}
			.fas{
				color:rgba(255,255,255,.65);
				margin-right: 10px;
			}
			.nav-item:hover a{
				color:rgba(255,255,255,.85)!important;
			}
			.nav-item:hover a i{
				color:rgba(255,255,255,.85)
			}
		</style>
	</head>

	<body>

			<div class="navbar navbar-inverse navbar-fixed-top fixed-top bg-dark">
						<!--a class="brand" href="./">Gerenciador do Banco de Dados - Canis</a-->
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li class="nav-item"><a href="../"  class="nav-link h5"><i class="fas fa-bone"></i>Voltar</a></li>
								<li <?php if ($this->nav=='clientes') { echo 'class="active"'; } ?> class="nav-item"><a href="./clientes"  class="nav-link h5"><i class="fas fa-user-edit" <?php if ($this->nav=='clientes') { echo 'style="color: #fff"'; } ?>></i>Gerenciar Clientes</a></li>
								<li <?php if ($this->nav=='produtos') { echo 'class="active"'; } ?> class="nav-item"><a href="./produtos"  class="nav-link h5"><i class="fas fa-dolly" <?php if ($this->nav=='produtos') { echo 'style="color: #fff"'; } ?>></i>Gerenciar Produtos</a></li>
						
							</ul>
							<!--ul class="nav pull-right">
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-lock"></i> Login <i class="caret"></i></a>
								<ul class="dropdown-menu">
									<li><a href="./loginform">Login</a></li>
									<li class="divider"></li>
									<li><a href="./secureuser">Example User Page <i class="icon-lock"></i></a></li>
									<li><a href="./secureadmin">Example Admin Page <i class="icon-lock"></i></a></li>
								</ul>
								</li>
							</ul-->
						</div><!--/.nav-collapse -->
			</div>
			<br>
			<br>
			<br>