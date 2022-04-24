<?php
	class Receita {
		private $quantidade;
        private $ingredientes = [];

		public function __construct(string $nome) {
			$this->nome = $nome;
		}
        public function printNome(): void {
            echo "Nome: " . $this->nome . "<br>";
        }
        
        public function printAllInfos(): void {
            $this->printNome();
        }
	}
?>
