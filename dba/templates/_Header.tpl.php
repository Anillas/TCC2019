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
			.btn-botao{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
			}
			@media (prefers-reduced-motion:reduce){
				.btn-botao{transition:none}
			}
			.btn-botao:hover{color:#212529;text-decoration:none}
			.btn-botao.focus,.btn-botao:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
			}
			.btn-botao.disabled,.btn-botao:disabled{opacity:.65}
			a.btn-botao.disabled,fieldset:disabled a.btn-botao{pointer-events:none}
			.btn-botao-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-botao-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-botao-primary.focus,.btn-botao-primary:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-botao-primary.disabled,.btn-botao-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-botao-primary:not(:disabled):not(.disabled).active,.btn-botao-primary:not(:disabled):not(.disabled):active,.show>.btn-botao-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-botao-primary:not(:disabled):not(.disabled).active:focus,.btn-botao-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-botao-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-botao-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-botao-secondary.focus,.btn-botao-secondary:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-botao-secondary.disabled,.btn-botao-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-botao-secondary:not(:disabled):not(.disabled).active,.btn-botao-secondary:not(:disabled):not(.disabled):active,.show>.btn-botao-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-botao-secondary:not(:disabled):not(.disabled).active:focus,.btn-botao-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-botao-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-botao-success:hover{color:#fff;background-color:#218838;border-color:#1e7e34}.btn-botao-success.focus,.btn-botao-success:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-botao-success.disabled,.btn-botao-success:disabled{color:#fff;background-color:#28a745;border-color:#28a745}.btn-botao-success:not(:disabled):not(.disabled).active,.btn-botao-success:not(:disabled):not(.disabled):active,.show>.btn-botao-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-botao-success:not(:disabled):not(.disabled).active:focus,.btn-botao-success:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-botao-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-botao-info:hover{color:#fff;background-color:#138496;border-color:#117a8b}.btn-botao-info.focus,.btn-botao-info:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-botao-info.disabled,.btn-botao-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-botao-info:not(:disabled):not(.disabled).active,.btn-botao-info:not(:disabled):not(.disabled):active,.show>.btn-botao-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-botao-info:not(:disabled):not(.disabled).active:focus,.btn-botao-info:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-botao-warning{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-botao-warning:hover{color:#212529;background-color:#e0a800;border-color:#d39e00}.btn-botao-warning.focus,.btn-botao-warning:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-botao-warning.disabled,.btn-botao-warning:disabled{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-botao-warning:not(:disabled):not(.disabled).active,.btn-botao-warning:not(:disabled):not(.disabled):active,.show>.btn-botao-warning.dropdown-toggle{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-botao-warning:not(:disabled):not(.disabled).active:focus,.btn-botao-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-botao-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-botao-danger:hover{color:#fff;background-color:#c82333;border-color:#bd2130}.btn-botao-danger.focus,.btn-botao-danger:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-botao-danger.disabled,.btn-botao-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-botao-danger:not(:disabled):not(.disabled).active,.btn-botao-danger:not(:disabled):not(.disabled):active,.show>.btn-botao-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-botao-danger:not(:disabled):not(.disabled).active:focus,.btn-botao-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-botao-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-botao-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}.btn-botao-light.focus,.btn-botao-light:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-botao-light.disabled,.btn-botao-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-botao-light:not(:disabled):not(.disabled).active,.btn-botao-light:not(:disabled):not(.disabled):active,.show>.btn-botao-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-botao-light:not(:disabled):not(.disabled).active:focus,.btn-botao-light:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-botao-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-botao-dark:hover{color:#fff;background-color:#23272b;border-color:#1d2124}.btn-botao-dark.focus,.btn-botao-dark:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-botao-dark.disabled,.btn-botao-dark:disabled{color:#fff;background-color:#343a40;border-color:#343a40}.btn-botao-dark:not(:disabled):not(.disabled).active,.btn-botao-dark:not(:disabled):not(.disabled):active,.show>.btn-botao-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-botao-dark:not(:disabled):not(.disabled).active:focus,.btn-botao-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-botao-outline-primary{color:#007bff;border-color:#007bff}.btn-botao-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-botao-outline-primary.focus,.btn-botao-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-botao-outline-primary.disabled,.btn-botao-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-botao-outline-primary:not(:disabled):not(.disabled).active,.btn-botao-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-primary.dropdown-toggle{color:#fff;background-color:#007bff;border-color:#007bff}.btn-botao-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-botao-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-botao-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-botao-outline-secondary.focus,.btn-botao-outline-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-botao-outline-secondary.disabled,.btn-botao-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-botao-outline-secondary:not(:disabled):not(.disabled).active,.btn-botao-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-botao-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-botao-outline-success{color:#28a745;border-color:#28a745}.btn-botao-outline-success:hover{color:#fff;background-color:#28a745;border-color:#28a745}.btn-botao-outline-success.focus,.btn-botao-outline-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-botao-outline-success.disabled,.btn-botao-outline-success:disabled{color:#28a745;background-color:transparent}.btn-botao-outline-success:not(:disabled):not(.disabled).active,.btn-botao-outline-success:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-success.dropdown-toggle{color:#fff;background-color:#28a745;border-color:#28a745}.btn-botao-outline-success:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-botao-outline-info{color:#17a2b8;border-color:#17a2b8}.btn-botao-outline-info:hover{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-botao-outline-info.focus,.btn-botao-outline-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-botao-outline-info.disabled,.btn-botao-outline-info:disabled{color:#17a2b8;background-color:transparent}.btn-botao-outline-info:not(:disabled):not(.disabled).active,.btn-botao-outline-info:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-info.dropdown-toggle{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-botao-outline-info:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-botao-outline-warning{color:#ffc107;border-color:#ffc107}.btn-botao-outline-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-botao-outline-warning.focus,.btn-botao-outline-warning:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-botao-outline-warning.disabled,.btn-botao-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-botao-outline-warning:not(:disabled):not(.disabled).active,.btn-botao-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-warning.dropdown-toggle{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-botao-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-botao-outline-danger{color:#dc3545;border-color:#dc3545}.btn-botao-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-botao-outline-danger.focus,.btn-botao-outline-danger:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-botao-outline-danger.disabled,.btn-botao-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-botao-outline-danger:not(:disabled):not(.disabled).active,.btn-botao-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-danger.dropdown-toggle{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-botao-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-botao-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-botao-outline-light:hover{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-botao-outline-light.focus,.btn-botao-outline-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-botao-outline-light.disabled,.btn-botao-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-botao-outline-light:not(:disabled):not(.disabled).active,.btn-botao-outline-light:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-botao-outline-light:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-botao-outline-dark{color:#343a40;border-color:#343a40}.btn-botao-outline-dark:hover{color:#fff;background-color:#343a40;border-color:#343a40}.btn-botao-outline-dark.focus,.btn-botao-outline-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-botao-outline-dark.disabled,.btn-botao-outline-dark:disabled{color:#343a40;background-color:transparent}.btn-botao-outline-dark:not(:disabled):not(.disabled).active,.btn-botao-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-botao-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.btn-botao-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-botao-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-botao-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}
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