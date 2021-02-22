<?php

function sanitizeName($name)
{

    $noString = strip_tags($name);

    $tinyName = preg_replace('/[^a-z A-Z]+/', '', $noString);
    $explodename = explode(" ", $tinyName);
    $correctNames = array_map('correctCase', $explodename);

    return implode(" ", $correctNames);

    // return $correctNames;
}


function correctCase($name)
{
  

    // il/i nomi tipo 'aAa' | 'AAA' con strtolower diventano --> 'aaa' | 'aaa'
    $nameLowercase = strtolower($name);
    // se abbiamo tipo 'aaa' con ucfirst diventa --> 'Aaa
    $uppercasename = ucfirst($nameLowercase);

    return $uppercasename;
}
