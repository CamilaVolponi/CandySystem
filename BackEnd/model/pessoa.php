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
            echo "Nome: " . $this->nome . "<br>";
        }
        public function printCpf(): void {
            echo "Cpf: " . $this->cpf . "<br>";
        }
        public function printTelefone(): void {
            echo "Telefone: " . $this->telefone . "<br>";
        }
        public function printEmail(): void {
            echo "Email: " . $this->email . "<br>";
        }
        
        public function printAllInfos(): void {
            $this->printNome();
            $this->printCpf();
            $this->printTelefone();
            $this->printEmail();
        }
	}
?>
