<?php

namespace App\Enums;

enum TipoFormaDePagamento : string {
    case PIX = "PIX";
    case DINHEIRO = "Dinheiro";
    case DEBITO = "Débito";
    case CREDITO = "Crédito";
    case PICPAY = "PicPay";
}
