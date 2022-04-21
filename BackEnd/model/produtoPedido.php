<?php
	class ProdutoPedido {
		private $quantidade, $preco;

		public function __construct(int $quantidade, float $preco) {
			$this->quantidade = $quantidade;
			$this->preco = $preco;
		}
	}
?>
