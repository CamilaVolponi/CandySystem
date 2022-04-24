<?php
	class Produto {
		private $nome, $preco;

		public function __construct(string $nome, float $preco) {
			$this->nome = $nome;
			$this->preco = $preco;
		}

        public function printNome(): void {
            echo "Nome: " . $this->nome . "<br>";
        }
        public function printPreco(): void {
            echo "Preço: " . $this->preco . "<br>";
        }
        
        public function printAllInfos(): void {
            $this->printNome();
            $this->printPreco();
        }
	}
?>
