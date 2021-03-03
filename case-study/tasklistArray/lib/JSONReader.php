<?php

/**
 * Apre un file formato JSON e lo converte in array associativo
 * 
 * @var string $filepath percorso del file da leggere
 * @return array $res restituisce array associativo corrispondente
 */

function JSONReader(string $filepath): ?array
{
    if (file_exists($filepath)) {

        $fileString = file_get_contents($filepath);
        $res = json_decode($fileString, true);
        $code = json_last_error();
        if ($code  != JSON_ERROR_NONE) {
            throw new Exception('syntax-error', $code);
        }
    } else {
        throw new Exception('file not exist', 404);
    }
    return $res;
}
