<?php
require_once "ingrediente.php"

class Receita {
    private $quantidade;
    private $ingredientes = [];

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function addIngrediente(Ingrediente $ingrediente): void{
        array_push($this->ingredientes, $ingrediente);
    }
    
    public function printNome(): void {
        echo "Nome: " . $this->nome . "\n";
    }

    public function printIngredientes(): void {
        foreach($this->ingredientes as $chave => $ingrediente){
            echo "<fieldset>";
            echo "<legend>Ingrediente:</legend>";
            $ingrediente->printAllInfos();
            echo "</fieldset>";
        }
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printNome();
        echo "</pre>";
        $this->printIngredientes();
    }
}
?>
