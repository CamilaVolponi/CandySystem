<?php
	class Pessoa {
		private $cpf, $nome, $telefone, $email, $senha;
        private $cargos = [];

		public function __construct(string $cpf, string $nome, string $telefone, string $email, string $senha) {
			$this->cpf = $cpf;
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->senha = $senha;
		}

        public function addCargo(Cargo $cargo): void{
            array_push($this->cargos, $cargo);
        }

        public function printNome(): void {
            echo "Nome: " . $this->nome . "\n";
        }
        public function printCpf(): void {
            echo "Cpf: " . $this->cpf . "\n";
        }
        public function printTelefone(): void {
            echo "Telefone: " . $this->telefone . "\n";
        }
        public function printEmail(): void {
            echo "Email: " . $this->email . "\n";
        }
        public function printCargos(): void {
            echo "<fieldset>";
            echo "<legend>Cargos:</legend>";
            echo "<ul>";
            foreach($this->cargos as $chave => $item){
                echo "<il>{$item->getDescricao()}</il>";
            }
            echo "</ul>";
            echo "</fieldset>";
        }
        
        public function printAllInfos(): void {
            echo "<pre>";
            $this->printNome();
            $this->printCpf();
            $this->printTelefone();
            $this->printEmail();
            echo "</pre>";
        }
	}
?>
