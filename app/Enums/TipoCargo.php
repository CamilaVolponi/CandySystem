<?php

namespace App\Enums;

enum TipoCargo : string {
    case PROPIETARIO = "propietário";
    case COZINHEIRO = "cozinheiro";
    case CONFEITEIRO = "confeiteiro";
}