<?php

class Cliente {
	private $nome, $telefone;

	public function __construct(string $nome, string $telefone) {
		$this->nome = $nome;
		$this->telefone = $telefone;
    }

    public function printNome(): void {
        echo "Nome: " . $this->nome . "\n";
    }
    public function printTelefone(): void {
        echo "Telefone: " . $this->telefone . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printNome();
        $this->printTelefone();
        echo "</pre>";
    }
}
?>
