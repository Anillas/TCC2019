<?php
	$cpfUsuario = $_SESSION['cpfUsuario'];
	$sql_select_reservas = "SELECT * FROM `reserva` WHERE cpfUsuario = '$cpfUsuario'";
    $verificacao = mysqli_query($connect, $sql_select_reservas);
    if (mysqli_num_rows($verificacao) == 0) {?>
    	<center>
    	<h1>Corre, que diferente das obras do governo os itens acabam!! Faça logo sua reserva!!!</h1>
	<img src="../imagens/corre.gif">
	</center>
    <?php }
?>