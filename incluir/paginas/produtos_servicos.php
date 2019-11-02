<?php
    require_once '../../controle/init.php';
    require SITE_ROOT_CONTROLE.DS.'Controlador.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include LIB_COMPLEMENTOS.DS.'head.php'; ?>
	<link rel="stylesheet" type="text/css" href="../complementos/style_menuLateral.css">
	<title>Produtos e Serviços</title>
</head>
<body>

	<?php include "../complementos/menu.php"; ?>
	<div class="wrapper">
        <nav id="sidebar" class="fixed-left">
            <ul class="nav flex-column list-unstyled components" id="pills-tab" role="tablist" style="border: none; position: fixed;">
                <p>O seu pet do seu jeito!</p>
                <li class="nav-item">
                    <a class="nav-link active" id="ToP-tab" data-toggle="tab" href="#ToP" role="tab" aria-controls="ToP" aria-selected="true">Todos os produtos</a>
                </li>




                <!--li>
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
                </li-->




                <li class="nav-item">
                    <a class="nav-link" id="personalizar-tab" data-toggle="tab" href="#personalizar" role="tab" aria-controls="personalizar" aria-selected="false">Personalizar</a>
                  </li>
            </ul>
        </nav>
        <div id="content">
            <div class="tab-content" id="pills-tabContent">
                <?php include 'subPaginas_PS/todosProdutos.php'; ?>
                <?php include 'subPaginas_PS/SPMP_Cachorro.php'; ?>
                <?php include 'subPaginas_PS/SPMP_Gato.php'; ?>
                <?php include 'subPaginas_PS/personalizar.php'; ?>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
    
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
	<script type="text/javascript" src="../font-awesome/js/solid.js"></script>
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