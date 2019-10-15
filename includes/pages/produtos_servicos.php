<!DOCTYPE html>
<html>
<head>
	<?php include "../complements/meta.php"; ?>
	<?php include "../complements/link.php"; ?>
	<link rel="stylesheet" type="text/css" href="../complements/style_menuLateral.css">
	<title>Produtos e Serviços</title>
</head>
<body>
	<?php include "../complements/menu.php"; ?>
	<div class="wrapper">
        <nav id="sidebar" class="fixed-left">
            <ul class="list-unstyled components" style="border: none;">
                <p>O seu pet do seu jeito!</p>
                <li>
                    <a href="#">Todos os produtos</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Só para meu pet</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Cachorro</a>
                        </li>
                        <li>
                            <a href="#">Gato</a>
                        </li>
                        <li>
                            <a href="#">Hamster</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Para todos os pets</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Brinquedos</a>
                        </li>
                        <li>
                            <a href="#">Casinhas</a>
                        </li>
                        <li>
                            <a href="#">Roupas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Personalizar</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <div class="card-header titulo_card"><h3>Casinhas para cachorros...</h3></div>
            <div class="card-columns" id="coluna01">
                <div class="card border-dark">
                    <img src="../images/produtos/casas_pet/cachorro/casa_cachorro_01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Casinha de madeira com uma pequena área.</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                   <div class="card border-dark">
                    <img src="../images/produtos/casas_pet/cachorro/casa_cachorro_02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title that wraps to a new line</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                  <div class="card border-dark">
                    <img src="../images/produtos/casas_pet/cachorro/casa_cachorro_03.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title that wraps to a new line</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
            </div>
            <div class="dropdown-divider"></div>
        </div>
    </div>
	<?php include "../complements/footer.php"; ?>
	<?php include "../complements/script.php"; ?>
	<script type="text/javascript" src="../../font-awesome/js/solid.js"></script>
	<script type="text/javascript" src="../../font-awesome/js/fontawesome.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>