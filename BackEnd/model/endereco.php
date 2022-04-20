<?php
	class Endereco {
		private $cep, $rua, $numero, $bairro, $cidade, $complemento, $referencia;

		public function __construct($cep, $rua, $numero, $bairro, $cidade, $complemento, $referencia) {
			$this->cep = $cep;
			$this->rua = $rua;
			$this->numero = $numero;
			$this->bairro = $bairro;
			$this->cidade = $cidade;
			$this->complemento = $complemento;
			$this->referencia = $referencia;
		}
	}
?>