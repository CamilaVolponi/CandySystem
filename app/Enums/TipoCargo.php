<?php

namespace App\Enums;

enum TipoCargo : string {
    case PROPRIETARIO_MASTER = "Proprietário-master";
    case PROPRIETARIO = "Proprietário";
    case FUNCIONARIO = "Funcionário";
}
