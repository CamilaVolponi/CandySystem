<?php
	class ProdutoPedido {
		private $quantidade, $preco;

		public function __construct($quantidade, $preco) {
			$this->quantidade = $quantidade;
			$this->preco = $preco;
		}
	}
?>