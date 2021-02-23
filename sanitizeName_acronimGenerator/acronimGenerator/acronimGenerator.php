<?php




function acronimeGenerator($name)
{

    // il/i nomi tipo 'aAa' | 'AAA' con strtolower diventano --> 'aaa' | 'aaa'
    $nameLowercase = strtolower($name);
    // se abbiamo tipo 'aaa' con ucfirst diventa --> 'Aaa
    $uppercasename = ucfirst($nameLowercase);

    // $correctNames = array_map('correctCase', $name);



    return $uppercasename;
}

// function correctCase($name)
// {
  

//     return $uppercasename;
// }
