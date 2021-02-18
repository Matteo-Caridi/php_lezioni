<?php


$persons = array(

    [
        'name' => 'Aldo',
        'surname' => 'Baglio',
    ],
    array(
        'name' => 'Giovanni',
        'surname' => 'Storti',
    ),

    [
        'name' => 'Giacomo',
        'surname' => 'Poretti',
    ]


);

$result = '';

foreach ($persons as $person) {
    $result .= $person['name'] . "\n";
}
echo $result;
