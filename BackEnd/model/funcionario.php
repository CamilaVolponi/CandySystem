<?php

require_once "pessoa.php";

class Funcionario extends Pessoa {
    public $cargo;

    public function __construct(string $cpf, string $nome, string $telefone, string $email, string $senha, string $cargo) {
        parent::__construct($cpf, $nome, $telefone, $email, $senha);
        $this->cargo = $cargo;
    }

    public function printCargo(): void {
        echo "Cargo: " . $this->cargo . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printNome();
        $this->printCpf();
        $this->printTelefone();
        $this->printEmail();
        $this->printCargo();
        echo "</pre>";
    }
}
?>
