<?php

class Cliente {
	private $nome, $telefone;

	public function __construct(string $nome, string $telefone) {
		$this->nome = $nome;
		$this->telefone = $telefone;
    }

    public function printNome(): void {
        echo "Nome: " . $this->nome . "<br>";
    }
    public function printTelefone(): void {
        echo "Telefone: " . $this->telefone . "<br>";
    }
    
    public function printAllInfos(): void {
        $this->printNome();
        $this->printTelefone();
    }
}
?>
