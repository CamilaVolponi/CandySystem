<?php

class Cliente {
	private $nome, $telefone;
    private $endereco;
  
	public function __construct(string $nome, string $telefone, Endereco $endereco) {
		$this->nome = $nome;
		$this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    public function printNome(): void {
        echo "Nome: " . $this->nome . "\n";
    }
    public function printTelefone(): void {
        echo "Telefone: " . $this->telefone . "\n";
    }
    public function printEndereco(): void {
        echo "<fieldset>";
        echo "<legend>Endereço:</legend>";
        $this->endereco->printAllInfos();
        echo "</fieldset>";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printNome();
        $this->printTelefone();
        $this->printEndereco();
        echo "</pre>";
    }
}
?>
