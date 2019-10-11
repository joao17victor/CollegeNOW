<?php
	class carro{
		private $modelo;
		private $cor;
		private $ano;
		private $marca;
		private $combustivel;

		public function setModelo($modeloparam){
			$this->modelo = $modeloparam;
		}

		public function getModelo(){
			echo $this->modelo;
		}

		public function setCor($corparam){
			$this->cor = $corparam;
		}

		public function getCor(){
			echo $this->cor;
		}

		public function setAno($anoparam){
			$this->ano = $anoparam;
		}

		public function getAno(){
			echo $this->ano;
		}

		public function setMarca($marcaparam){
			$this->marca = $marcaparam;
		}

		public function getMarca(){
			echo $this->marca;
		}

		public function setCombustivel($combustivelparam){
			$this->combustivel = $combustivelparam;
		}

		public function getCombustivel(){
			echo $this->combustivel;
		}

		function __construct($modelo, $cor, $ano, $marca, $combustivel){
			$this->modelo = $modelo;
			$this->cor = $cor;
			$this->ano = $ano;
			$this->marca = $marca;
			$this->combustivel = $combustivel;
		}
	}
?>