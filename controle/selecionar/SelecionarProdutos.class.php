<?php
	class Projeto {
		private $nome;
		private $idProjeto;
		private $descricao;
		private $inicio;
		private $termino;
		private $ativo;
		private $imagens;

		public function getIdProjeto() {
          	return $this->idProjeto;
      	}
   
      	public function setIdProjeto($idProjeto) {
        	$this->idProjeto = $idProjeto;
		}
		
		public function getDescricao() {
			return $this->descricao;
		}
 
		public function setDescricao($descricao) {
		  $this->descricao = $descricao;
		}
		
		public function getTermino() {
			$timestamp = strtotime($this->termino); 
          	return date('d/m/Y', $timestamp);
		}
 
		public function setTermino($termino) {
		  $this->termino = $termino;
		}

      	public function getInicio() {
			$timestamp = strtotime($this->inicio); 
          	return date('d/m/Y', $timestamp);
      	}
   
      	public function setInicio($inicio) {
        	$this->inicio = $inicio;
      	}
		
      	public function getNome() {
			return $this->nome;
		}
 
		public function setNome($nome) {
		  	$this->nome = $nome;
		}

		public function setImagens($imagens) {
			$this->imagens = $imagens;
		}

		public function getImagens() {
			return $this->imagens;
		}

		public function getCapa() {
			foreach ( $this->imagens as $imagem ) {
				if($imagem->getCapa() == 1)
					return $imagem;
			}
			return new ImagemProjeto();
		}
        public function setAtivo($ativo) {
          	$this->ativo = $ativo;
        }
	}

?>