<?php
	$cpfUsuario = $_SESSION['cpfUsuario'];
	$sql_select_pedidos = "SELECT * FROM `pedidos` WHERE cpfUsuario = '$cpfUsuario'";
    $verificacao = mysqli_query($connect, $sql_select_pedidos);
    if (mysqli_num_rows($verificacao) == 0) {?>
    	<center>
    	<h1>Parece que você não realizou nenhum pedido! :(</h1>
	<img src="../imagens/gif_dog_chorando.gif">
	</center>
    <?php }
?>