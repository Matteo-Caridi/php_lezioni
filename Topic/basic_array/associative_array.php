<?php

// indici sonos tringhe


// $task = array (); == $tast =[];

// Array associativo

// scorciatoia
$task = [

    'taskName' => 'Comprare il latte',
    'date' => '2021-02-11',  //anno-mese-giorno
    'id' => 4212,
];


echo "Bisogna comprare il latte il giorno " . $task['date'] . "\n";


$person = array(

    'name' => 'Mario',
    'surname' => 'Rossi',
    'age' => 25,
    'cf' => 'xxxxxxxxxxxxx',
    'address' => array(
        'street' => 'Via Ormea',
        'number' => '5',
        'postalcode' => '10100',
    )
);

$name = $person['name'];
$surname = $person['surname'];
$street = $person['address']['street'];
$number = $person['address']['number'];

echo "$name $surname abita in $street al numero $number \n";
// oppure
echo $person['name'] . " " . $person['surname'] . " abita in " .  $person['address']['street'] . " al numero " . $person['address']['number'];

// Array indicizzato


$personNum = ['Mario', 'Rossi', 25, 'xxxxxxxx', ['via ormea', '5', '10100']];
