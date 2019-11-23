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
        <div id="content">
            <div class="tab-content" id="pills-tabContent">
                <?php include 'subPaginas_PS/todosProdutos.php'; ?>
                <?php include 'subPaginas_PS/SPMP_Cachorro.php'; ?>
                <?php include 'subPaginas_PS/SPMP_Gato.php'; ?>
                <?php include 'subPaginas_PS/personalizar.php'; ?>
            </div>
        </div>
<?php
    if (!empty($_POST)) {
        $idProduto = $_POST["idProduto"];
        $nomeProduto = $_POST["nomeProduto"];
        $imgProduto = $_POST["imgProduto"];
        $valorProduto = $_POST["valorProduto"];
        $quantidade = $_POST["quantidade"];
        $valorFinal = $valorProduto*$quantidade;
        $$idProduto = array($idProduto, $nomeProduto, $imgProduto, $valorProduto, $quantidade, $valorFinal);
        $arranjo = $_SESSION['reservas'];
        $aux = FALSE;
        foreach ($arranjo as $chave) {
            foreach ($chave as $fechadura) {
                if ($fechadura == $idProduto) {
                	
                	$aux = TRUE;
                }
            }
        }
        if ($aux = FALSE) {
        	array_push($arranjo, $$idProduto);
        }
        $_SESSION['reservas'] = $arranjo;
    }
?>
<?php
    if (!empty($_SESSION['reservas'])) {
        echo '<a href="finalizar_reserva.php"> <button class="btn btn-success finalizar_reserva">
            Finalizar Reservas!
            </button>
        </a>';
    }
?>
    </div>
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
	<script type="text/javascript" src="../font-awesome/js/solid.js"></script>
</body>
</html>