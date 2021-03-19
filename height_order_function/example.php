<?php


$saluta = function ($nome) {
    echo "ciao $nome come va? \n";
};

$saluta("aldo");

// è come se scrivessimo: 

function saluta($nome)
{
    echo "ciao $nome come va?";
};

$saluta = saluta ("gianni");
