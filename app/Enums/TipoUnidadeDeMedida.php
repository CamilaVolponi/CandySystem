<?php

namespace App\Enums;

enum TipoUnidadeDeMedida : string {
    case COLHER_DE_CAFE = "Colher de café";
    case COLHER_DE_CHA = "Colher de chá";
    case COLHER_DE_SOPA = "Colher de sopa";
    case XICARA_DE_CHA = "Xícara de chá";
    case UNIDADE = "Unidade";
    case QUILOS = "Quilos (kg)";
    case GRAMAS = "Gramas (g)";
}
