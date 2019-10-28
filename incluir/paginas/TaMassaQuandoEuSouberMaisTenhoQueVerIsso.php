<!DOCTYPE html>
<html>
<head>
  <?php include "../complementos/meta.php"; ?>
  <?php include "../complementos/link.php"; ?>
  <link rel="stylesheet" type="text/css" href="../complementos/style_menuLateral.css">
  <title>Produtos e Serviços</title>
</head>
<body>
  <?php include "../complementos/menu.php"; ?>
  <div class="wrapper">
        <nav id="sidebar" class="fixed-left">
            <ul class="list-unstyled components" id="pills-tab" role="tablist" style="border: none;">
                <p>O seu pet do seu jeito!</p>
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Só para meu pet</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="nav-cachorro-tab" data-toggle="tab" href="#nav-cachorro" role="tab" aria-controls="nav-cachorro" aria-selected="false">Cachorro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Gato</a>
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
                <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
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
  <?php include "../complementos/footer.php"; ?>
  <?php include "../complementos/script.php"; ?>
  <script type="text/javascript" src="../../font-awesome/js/solid.js"></script>
    <!-- TALVEZ SEJA ESSENCIAL PRO MENU LATERAL
     <script type="text/javascript" src="../../font-awesome/js/fontawesome.min.js"></script>
    -->
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

<style type="text/css">
      -webkit-background-clip: text;
          background-clip: text;
  -webkit-text-fill-color: transparent;

    
</style>