<?php


// SONO EQUIVALENTI
// $classe= array('')
$classe = [
    ['Giacomo', 'Poretti'],
    ['Giovanni', 'Storti'],
    ['Ajeje', 'Brazof'],
];

print_r($classe);

foreach ($classe as $key => $alunno) {
    $nome = $alunno[0];
    $cognome = $alunno[1];

    echo "Ciao sono $nome $cognome \n";
}
