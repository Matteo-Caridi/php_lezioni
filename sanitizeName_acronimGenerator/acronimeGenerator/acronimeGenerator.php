<?php




function acronimeGenerator($name)
{


    $correctNames = array_map('correctCase', $name);



    return $correctNames;
}

function correctCase($name)
{
    // il/i nomi tipo 'aAa' | 'AAA' con strtolower diventano --> 'aaa' | 'aaa'
    $nameLowercase = strtolower($name);
    // se abbiamo tipo 'aaa' con ucfirst diventa --> 'Aaa
    $uppercasename = ucfirst($nameLowercase);

    return $uppercasename;
}
