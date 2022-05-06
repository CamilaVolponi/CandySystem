<?php

enum TipoUnidadeDeMedida : string {
    case ColherDeCafe = "Colher de Café";
    case ColherDeCha = "Colher de Chá";
    case ColherDeSopa = "Colher de Sopa";
    case XicaraDeCha = "Xícara de Chá";
    case Unidade = "Unidade";
    case Quilos = "Quilos - Kg";
    case Gramas = "Gramas";
}

class Ingrediente {
    private $descricao, $unidadeDeMedida, $quantidade;

    public function __construct(string $descricao, int $quantidade, TipoUnidadeDeMedida $unidadeDeMedida) {
        $this->descricao = $descricao;
        $this->unidadeDeMedida = $unidadeDeMedida;
        $this->quantidade = $quantidade;
    }

    public function printDescricao(): void {
        echo "Descricao: " . $this->descricao . "\n";
    }
    public function printUnidadeDeMedida(): void {
        echo "Unidade de medida: " . var_dump($this->unidadeDeMedida) . "\n";
    }
    public function printQuantidade(): void {
        echo "Quantidade: " . $this->quantidade . "\n";
    }
    
    public function printAllInfos(): void {
        // echo "<select>";
        //     foreach(TipoUnidadeDeMedida::cases() as $chave => $item){
        //         echo "<option value=\"$item->value\">$item->value</option>";
        //     }
        // echo "</select>";
        echo "<pre>";
        $this->printDescricao();
        $this->printUnidadeDeMedida();
        $this->printQuantidade();
        echo "</pre>";
    }
}

?>
