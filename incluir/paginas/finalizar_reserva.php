<?php
	require_once '../../controle/init.php';
	require SITE_ROOT_CONTROLE.DS.'Controlador.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include LIB_COMPLEMENTOS.DS.'head.php'; ?>
</head>
<body>
	<?php include "../complementos/menu.php"; ?>
	<div class="mx-auto my-5 col-10">
		<div class="card">
			<ul class="list-group list-group-flush">
				<?php
					$pague = 0;
					foreach ($_SESSION['reservas'] as $lista) {
						echo '<li class="list-group-item">
  								<div class="row no-gutters">
    								<div class="col-md-4">';
						if (is_array($lista)) {
							$cont = 1;
							foreach ($lista as $item) {
								if ($cont == 1) {
									$idProduto = $item;
								}elseif ($cont == 2) {
									$nomeProduto = $item;
								}elseif ($cont == 3) {
									$imgProduto = $item;
								}elseif ($cont == 4) {
									$valorProduto = $item;
								}elseif ($cont == 5) {
									$quantidadeProduto = $item;
								}elseif ($cont == 6) {
									$valorFinal = $item;
									$pague = $pague+$valorFinal;
								}
								$cont++;
							}
						}
						echo '<img src="../imagens/produtos/'.$imgProduto.'" class="card-img" alt="...">
						</div>
      					<div class="card-body">
      					<h2 class="card-title">'.$nomeProduto.'</h2>
      					<h3 class="card-text"> Valor &nbsp; Quantidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total</h3>
      					<h3 class="card-text">'.$valorProduto.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$quantidadeProduto.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R$ '.$valorFinal.',00</h3>
						      </div>
						  </div>
						';
						echo '</li>';
					}
				?>
			</ul>
		</div>
	</div>
	<?php
		echo '<a href="pague.php"><button class="btn btn-success finalizar_reserva">
            Finalizar Reservas!<br> R$ '.$pague.',00
        </button></a>';
    ?>
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
</body>
</html>