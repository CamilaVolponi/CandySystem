<?php
	class ProdutoPedido {
		private $quantidade, $preco, $produto;

		public function __construct(int $quantidade, float $preco) {
			$this->quantidade = $quantidade;
			$this->preco = $preco;
		}

        public function printQuantidade(): void {
            echo "Quantidade: " . $this->quantidade . "<br>";
        }
        public function printPreco(): void {
            echo "Preço: " . $this->preco . "<br>";
        }
        
        public function printAllInfos(): void {
            $this->printQuantidade();
            $this->printPreco();
        }
	}
?>
