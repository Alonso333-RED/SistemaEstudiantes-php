<?php

declare(strict_types=1);

class Validador{

    public static function validar_string(string $texto) {
    // Recortar los espacios al principio y final
    $texto_trimmed = trim($texto);
    // Si después de recortar queda vacío (longitud cero), es cadena vacía o solo espacios
    if ($texto_trimmed === "") {
        //echo "La cadena está vacía o solo tiene espacios.";
        return false;
    } else {
        // cadena válida
        //echo "Cadena con contenido: '$texto_trimmed'";
        return true;
    }
}

}