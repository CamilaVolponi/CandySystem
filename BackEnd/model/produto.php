<?php
	class Produto {
		private $nome, $preco;

		public function __construct(string $nome, float $preco) {
			$this->nome = $nome;
			$this->preco = $preco;
		}
	}
?>
