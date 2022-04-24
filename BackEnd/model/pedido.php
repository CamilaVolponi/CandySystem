<?php
class Pedido {
    private $dataEntrega, $horario, $formaPagamento;

    public function __construct(string $dataEntrega, string $horario, string $formaPagamento) {
        $this->dataEntrega = $dataEntrega;
        $this->horario = $horario;
        $this->formaPagamento = $formaPagamento;
    }

    public function printDataEntrega(): void {
        echo "Data de Entrega: " . $this->dataEntrega . "<br>";
    }
    public function printHorario(): void {
        echo "Horario: " . $this->horario . "<br>";
    }
    public function printFormaPagamento(): void {
        echo "Forma de Pagamento: " . $this->formaPagamento . "<br>";
    }
    
    public function printAllInfos(): void {
        $this->printDataEntrega();
        $this->printHorario();
        $this->printFormaPagamento();
    }
}
?>
