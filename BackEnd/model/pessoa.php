<?php
	class Pessoa {
		public $cpf, $nome, $telefone, $email, $senha;

		public function __construct(string $cpf, string $nome, string $telefone, string $email, string $senha) {
			$this->cpf = $cpf;
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->senha = $senha;
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
