<div class="tab-pane fade show active" id="ToP" role="tabpanel" aria-labelledby="ToP-tab">
			<div class='card-columns' id='coluna01'>
	<?php
		mysqli_query($connect, "SET NAMES 'utf8'");
		mysqli_query($connect, 'SET character_set_connection=utf8');
		mysqli_query($connect, 'SET character_set_client=utf8');
		mysqli_query($connect, 'SET character_set_results=utf8');	
		$sql = mysqli_query($connect, "SELECT * FROM produtos");
		
		while($resultado = mysqli_fetch_array($sql)){
			$id = $resultado['id'];
			$nome 		= $resultado['nome'];
			$descricao 	= $resultado['descricao'];
			$imagem 	= $resultado['imagem'];
			$preco 	= $resultado['preco'];
			$quantidade = $resultado['quantidade'];
	          echo "<div class='card border-dark'>
	          <center>
	          <img src='../imagens/produtos/".$imagem.".jpg' class='card-img-top' alt='...' style='max-width: 60%; height: auto;'></center>
	            	<div class='card-body'>
	              		<h5 class='card-title'>".$nome."</h5>
	              		<h5 class='card-title align'> R$ ".$preco."</h5>
	              		<p class='card-text' style='min-height: 5ch; max-height: 20ch;overflow: hidden;text-overflow: ellipsis;''>".$descricao."</p>
	              		<form method='POST' action='reserva.php'>
	              			<input type='text' name='idProduto'  value='".$id."' style='display: none;' required>";
	              			if ($_SESSION['user'] == 'deslogado'){
	              				echo '<h5 class="text-danger"> Entre para poder reservar </h5>';
	              			}else{
	              				echo "
				              		<button type='submit' class='btn btn-warning disabled' disabled>
									  Reservar
									</button>";
							}echo "
        				</form>
		            </div>
	        	</div>
			";
		}
	?>
	</div>
</div>
<!--a href='' class='btn btn-outline-danger btn-sm'><i class='far fa-heart'></i></a-->