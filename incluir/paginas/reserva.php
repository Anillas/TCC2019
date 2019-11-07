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
	<center>
	<div class="my-5">
	<?php
		$produtos = isset($_POST["idProduto"]) ? trim($_POST["idProduto"]) : FALSE;
        mysqli_query($connect, "SET NAMES 'utf8'");
        mysqli_query($connect, 'SET character_set_connection=utf8');
        mysqli_query($connect, 'SET character_set_client=utf8');
        mysqli_query($connect, 'SET character_set_results=utf8');   
        $dados_produto = mysqli_query($connect, "SELECT * FROM produtos WHERE id = '$produtos'");
        $carregar_dados_produto = mysqli_fetch_array($dados_produto);
        $nomePR = $carregar_dados_produto['nome'];
        $descricaoPR = $carregar_dados_produto['descricao'];
        $precoPR = $carregar_dados_produto['preco'];
        $quantidadePR = $carregar_dados_produto['quantidade'];
        $imagemPR = $carregar_dados_produto['imagem'];
        echo '<div class="card col-8" >
				  <div class="card-header">
				  <h3>
				    Reservar
			    	</h3>
				  </div>
				  <div class="card-body">
				  <img src="../imagens/produtos/casas_pet/cachorro/'.$imagemPR.'" class="card-img-top" alt="...">
				    <h4 class="card-title mt-2"><div style="float: left;">'.$nomePR.'</div><div style="float: right;">'.$precoPR.' R$</div></h4>
				    <br>
				    <p class="card-text">'.$descricaoPR.'</p>
				    <a href="produtos_servicos.php" class="btn btn-danger">Voltar</a>
				    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">
					  Reservar
					</button>
				  </div>
				</div>';
    ?>
    <!-- Modal -->
	<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content text-warning" style="background-color: #343a40">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Quantidade</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	          <span aria-hidden="true" style="color: white;">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       

   <form action="produtos_servicos.php" method="POST" class="range-field my-5">
      <?php echo '<input id="barra" class="custom-range" type="range" name="quantidade" value="1" min="1" max="'.$quantidadePR.'" />'?>
    <div class="row">
      <div class="col-md-6 text-center pb-5">
        <h3><span class="badge blue lighten-2 mb-4">Quantidade</span></h3>
        <h4 class="text-warning"><strong id="quantidade">1</strong></h4>
      </div>
      <div class="col-md-6 text-center pb-5">
        <h3><span class="badge blue lighten-2 mb-4">Valor</span></h3>
        <?php
        	echo '<h4 class="text-success"><strong id="preco">'.$precoPR.' R$</strong></h4>'
        ?>
      </div>
    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
	        <button type="submit" class="btn btn-success">Confirmar Reserva</button>
	      </div>
	    </div>
	  </div>
	  </form>
	</div>
    </center>

    <?php
    	echo '<input type="text" id="valor" style="display: none;" value="'.$precoPR.'">';
    ?>
	<?php include "../complementos/footer.php"; ?>
	<?php include "../complementos/script.php"; ?>
	<script type="text/javascript">
		var valor = document.getElementById('valor').value;
		var barra = $("#barra");
		var quantidade = $("#quantidade");
		var preco = $("#preco");
		var license = {
		corpo: {
		active: true,
		price: valor,
		},
		dev: {
		active: false,
		price: valor,
		},
		priv: {
		active: false,
		price: valor,
		}
		}

		function calculate(price, value) {
		preco.text(Math.round(value * price) + '.00 R$');
		quantidade.text(Math.round(value))
		}
		barra.on("input change", function(e) {
		if (license.priv.active) {
		calculate(license.priv.price, $(this).val());
		} else if (license.corpo.active) {
		calculate(license.corpo.price, $(this).val());
		} else if (license.dev.active) {
		calculate(license.dev.price, $(this).val());
		}
		})
	</script>
	<script type="text/javascript">
		var slider = new Slider('#barra', {
			formatter: function(value) {
				return 'Current value: ' + value;
			}
		});
	</script>
</body>
</html>