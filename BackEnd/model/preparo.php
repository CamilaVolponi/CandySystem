<?php

class Preparo {
    private $descricaoPasso, $ordem;

    public function __construct(String $descricaoPasso, int $ordem) {
        $this->descricaoPasso = $descricaoPasso;
        $this->ordem = $ordem;
    }

    public function getdescricaoPasso(): string {
        return $this->descricaoPasso;
    }    

    public function printdescricaoPasso(): void {
        echo "Descrição: " . var_dump($this->descricaoPasso) . "\n";
    }
    
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printDescricaoPasso();
        echo "</pre>";
    }
}

?>