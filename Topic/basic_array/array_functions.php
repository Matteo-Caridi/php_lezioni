<?php

// in_array()

$names = ['Mario', 'Luigi', 'Paolo'];

// C'è Mario?

var_dump(findName('Mario',  $names));
var_dump(in_array('Mario',  $names));


/**
 *Questa funzione cerca il nome
 */


function findName(string $nameTofind, array $names): bool
{
    foreach ($names as $name) {
        if ($name === $nameTofind) {
            return true;
        }
    }
    return false;
}
