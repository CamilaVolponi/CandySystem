<?php
class Pedido {
    private $dataEntrega, $horario, $formaPagamento;

    public function __construct($dataEntrega, $horario, $formaPagamento) {
        $this->dataEntrega = $dataEntrega;
        $this->horario = $horario;
        $this->formaPagamento = $formaPagamento;
    }
}
?>