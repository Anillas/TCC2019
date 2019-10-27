<?php
	include_once SITE_ROOT_CONTROLE.DS.'conexao.php';
	include_once SOURCE_BUSCAR.DS.'DaoIndex.class.php';
	class IndexController {
		public function getDados() {
			try {
				$daoIndex = new DaoIndex();
				return $daoIndex->getDados();
			} catch (Exception $e) {
				print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
			}
		}
	}
?>