<?php
	class Ingrediente {
		private $descricao, $marca, $unidadeDeMedida, $quantidadeTotal, $quantidadeUsada, $precoUnitario, $validade, $lote;

		public function __construct($descricao, $marca, $unidadeDeMedida, $quantidadeTotal, $quantidadeUsada, $precoUnitario, $validade, $lote) {
			$this->descricao = $descricao;
			$this->marca = $marca;
			$this->unidadeDeMedida = $unidadeDeMedida;
			$this->quantidadeTotal = $quantidadeTotal;
			$this->quantidadeUsada = $quantidadeUsada;
			$this->precoUnitario = $precoUnitario;
			$this->validade = $validade;
			$this->lote = $lote;
		}
	}
?>