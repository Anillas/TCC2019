<?php
	include_once SITE_ROOT_CONTROLE.DS.'conexao.php';
	include_once SOURCE_SELECIONAR.DS.'Index.class.php';
	class DaoIndex {
      public function getDados() {
            $sql = "SELECT * FROM empresa";
            return $this->populaIndex($row[0]);
    }

    private function populaIndex($row) {
        $index = new Index;
        $index->setHistoria($row['historia']);
        $index->setMetodologia($row['metodologia']);
        $index->setNome($row['nome']);
        $index->setObjetivo($row['objetivo']);
        return $index;
    }
}

?>