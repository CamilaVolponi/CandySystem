<?php

namespace App\Enums;

enum TipoFormaDePagamento : string {
    case PIX = "pix";
    case DINHEIRO = "dinheiro";
    case DEBITO = "débito";
    case CREDITO = "crédito";
    case PICPAY = "picpay";
}