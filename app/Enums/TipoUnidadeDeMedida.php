<?php

namespace App\Enums;

enum TipoUnidadeDeMedida : string {
    case COLHER_DE_CAFE = "colher de café";
    case COLHER_DE_CHA = "colher de chá";
    case COLHER_DE_SOPA = "colher de sopa";
    case XICARA_DE_CHA = "xícara de chá";
    case UNIDADE = "unidade";
    case QUILOS = "quilos (kg)";
    case GRAMAS = "gramas (g)";
}
