<?php


$persons = array(

    [
        'name' => 'Aldo',
        'surname' => 'Baglio',
    ],
    [
        'name' => 'Giovanni',
        'surname' => 'Storti',
    ],
    [
        'name' => 'Giacomo',
        'surname' => 'Storti',
    ]
);

// Paradigma imperativo
// Il ciclo for è ancora + imperativo del foreach
// perchè ci concentriamo a far funzionare il ciclo


// $names = [];
// $surname = [];

// foreach ($persons as $person) {
//     $names[] = $person['name'];
//     // $surname[] = $person['surname'];
// }

$stortis = [];
foreach ($persons as $person) {
    if ($person['surname'] == 'Storti') {
        array_push($stortis, $person);
    }
}

// echo implode("|", $names);
// echo "\n";
// echo implode("|", $surname);


var_dump($stortis);

// ALTERNATIVE
// $comma_separated = implode(", ", $names);
// echo $comma_separated;

// var_dump($names);
