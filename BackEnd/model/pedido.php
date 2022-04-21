<?php
class Pedido {
    private $dataEntrega, $horario, $formaPagamento;

    public function __construct(string $dataEntrega, string $horario, string $formaPagamento) {
        $this->dataEntrega = $dataEntrega;
        $this->horario = $horario;
        $this->formaPagamento = $formaPagamento;
    }
}
?>
