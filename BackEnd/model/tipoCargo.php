<?php

enum ETipoCargo : string {
    case Proprietario = "Proprietário";
    case Cozinheiro = "Cozinheiro";
    case Confeiteiro = "Confeiteiro";
}

class TipoCargo {
    private $descricao;

    public function __construct(ETipoCargo $descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao(): string {
        return $this->descricao->value;
    }    

    public function printDescricao(): void {
        echo "Descrição: " . var_dump($this->descricao) . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printDescricao();
        echo "</pre>";
    }
}

?>
