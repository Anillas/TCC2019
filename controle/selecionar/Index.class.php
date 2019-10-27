<?php
	class Index
	{
		private $historia;
		private $metodologia;
		private $nome;
		private $objetivo;

		public function getHistoria() {
          	return $this->historia;
      	}
      	public function setHistoria($historia) {
        	$this->historia = $historia;
		}

		public function getMetodologia() {
          	return $this->metodologia;
      	}
      	public function setMetodologia($metodologia) {
        	$this->metodologia = $metodologia;
		}
	

		public function getNome() {
          	return $this->nome;
      	}
      	public function setNome($nome) {
        	$this->nome = $nome;
		}
	

		public function getObjetivo() {
          	return $this->objetivo;
      	}
      	public function setObjetivo($objetivo) {
        	$this->objetivo = $objetivo;
		}
	}
?>