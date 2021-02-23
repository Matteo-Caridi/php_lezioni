<?php




function acronimeGenerator($name)
{

    // il/i nomi tipo 'aAa' | 'AAA' con strtolower diventano --> 'aaa' | 'aaa'
    $nameLowercase = strtolower($name);
    // se abbiamo tipo 'aaa' con ucfirst diventa --> 'Aaa
    $uppercasename = ucwords($nameLowercase);

    $acronimo = preg_split("/(?<=\s|^)[a-z]/i", $uppercasename);
    // $correctNames = array_map('correctCase', $name);



    return $acronimo;
}

// function correctCase($name)
// {
  

//     return $uppercasename;
// }
