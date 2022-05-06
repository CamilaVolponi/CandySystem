<?php

class Cargo {
    /*
    Design Pattern: Peso mosca
        Motivo: Pois teremos tipos cargos repitidos, mas cargos únicos
        Exemplo:
            tipoCargo:
                Cozinheiro
                Confeiteiro
                Proprietário
            cargo:
                Cozinheiro 1,
                Cozinheiro 2,
                Confeiteiro 1,
                Confeiteiro 2
    */
    private $dataEntrada, $dataSaida, $tipoCargo;

    public function __construct(DateTime $dataEntrada, DateTime $dataSaida, TipoCargo $tipoCargo) {
        $this->dataEntrada = $dataEntrada;
        $this->dataSaida = $dataSaida;
        $this->tipoCargo = $tipoCargo;
    }

    public function printDataEntrada(): void {
        echo "Data de entrada: " . $this->dataEntrada . "\n";
    }
    public function printDataSaida(): void {
        echo "Data de saída: " . var_dump($this->unidadeDataSaida) . "\n";
    }
    public function getDescricao(): string {
        return $this->tipoCargo.getDescricao();
    }
        
    public function printAllInfos(): void {
        echo "<pre>";
        $this->printDataEntrada();
        $this->printDataSaida();
        echo "</pre>";
    }
}

?>
