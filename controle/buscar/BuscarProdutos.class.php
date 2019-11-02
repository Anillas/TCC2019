<?php
  include_once SITE_ROOT_CONTROLE.DS.'conexao.php';
  include_once SOURCE_SELECIONAR.DS.'SelecionarProdutos.class.php';
  
  class BuscarProdutos {
   
      public static $instancia;
   
      public static function getInstancia() {
        if (!isset(self::$instancia))
            self::$instancia = new BuscarProdutos();
 
        return self::$instancia;
      }
      public function buscarProdutoPorId($idProduto){
        
        try {
          $sql = "SELECT * FROM produtos WHERE id = :id";
          $p_sql = Conexao::getInstancia()->prepare($sql);
          $p_sql->bindValue(":id", $idProduto);
          $p_sql->execute();
          $resultado = $p_sql->fetch(PDO::FETCH_ASSOC);
          $sql = "SELECT *  FROM tb_imagem_projeto WHERE ativa=:ativa AND fk_projeto=:id";
          $p_sql2 = Conexao::getInstancia()->prepare($sql);
          $p_sql2->bindValue(":id", $idProjeto);
          $p_sql2->bindValue(":ativa", 1);
          $p_sql2->execute();
          $lista_imagens = $p_sql2->fetchAll(PDO::FETCH_ASSOC);
          $imagens = array();
          foreach ($lista_imagens as $i){
              $imagens[] = $this->populaImagem($i);
          }
          return $this->populaProjeto($resultado, $imagens);
        } catch (Exception $e) {
          print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function listarProjetosPrincipais() {
        try {
            $sql = "SELECT *  FROM tb_projeto WHERE principal=:principal AND ativo=:ativo";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->bindValue(":principal", 1);
            $p_sql->bindValue(":ativo", 1);
            $p_sql->execute();
            $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
 
            foreach ($lista as $l){
                $sql = "SELECT *  FROM tb_imagem_projeto WHERE ativa=:ativa AND fk_projeto=:projeto";
                $p_sql = Conexao::getInstancia()->prepare($sql);
                $p_sql->bindValue(":projeto", $l['id_projeto']);
                $p_sql->bindValue(":ativa", 1);
                $p_sql->execute();
                $lista_imagens = $p_sql->fetchAll(PDO::FETCH_ASSOC);
                $imagens = array();
                foreach ($lista_imagens as $i){
                    $imagens[] = $this->populaImagem($i);
                }
                $f_lista[] = $this->populaProjeto($l, $imagens);
            }
 
            return $f_lista;
        } catch (Exception $e) {
            print $e;
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
      }
      public function listarProdutos(){
          try{
            $sql = "SELECT * FROM produtos WHERE ativo=:ativo";
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql -> bindValue(":ativo", 1);
            $p_sql -> execute();
            $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            for ($i=0; $i < sizeof($lista) ; $i++) { 
              # code...
            }
            foreach ($lista as $l) {
                $sql = "SELECT *  FROM tb_imagem_projeto WHERE ativa=:ativa AND fk_projeto=:projeto";
                $p_sql = Conexao::getInstancia()->prepare($sql);
                $p_sql->bindValue(":projeto", $l['id_projeto']);
                $p_sql->bindValue(":ativa", 1);
                $p_sql->execute();
                $lista_imagens = $p_sql->fetchAll(PDO::FETCH_ASSOC);
                $imagens = array();
                foreach ($lista_imagens as $i){
                    $imagens[] = $this->populaImagem($i);
                }
                $f_lista[] = $this->populaProjeto($l, $imagens);
            }
            return $f_lista;
          }catch (Exception $e){
            print $e;
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }

      private function populaImagem($row) {
        $imagem = new ImagemProjeto;
        $imagem->setIdImagem($row['id_imagem']);
        $imagem->setFkProjeto($row['fk_projeto']);
        $imagem->setDescricao($row['descricao']);
        $imagem->setLink($row['link']);
        $imagem->setCapa($row['capa']);
        $imagem->setAtiva($row['ativa']);
        return $imagem;
    }

      private function populaProjeto($row, $imagens) {
          $projeto = new Projeto;
          $projeto->setIdProjeto($row['id_projeto']);
          $projeto->setDescricao($row['descricao']);
          $projeto->setInicio($row['inicio']);
          $projeto->setTermino($row['termino']);
          $projeto->setNome($row['nome']);
          $projeto->setImagens($imagens);
          $projeto->setAtivo($row['ativo']);
          return $projeto;
      }
  }
  ?>