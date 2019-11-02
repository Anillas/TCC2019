<?php
    include_once SOURCE_BUSCAR.DS.'BuscarProdutos.class.php';
  	class ListarProdutos{
		public function listarProdutos() {
			try {
				$buscarProduto = new BuscarProdutos();
				return $buscarProduto->listarProdutos();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
        }
    }
?>