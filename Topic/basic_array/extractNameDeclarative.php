<?php


$persons = [

    [
        'name' => 'Aldo',
        'surname' => 'Storti',
    ],
    [
        'name' => 'Giovanni',
        'surname' => 'Baglio',
    ],
    [
        'name' => 'Giacomo',
        'surname' => 'Storti',
    ]
];

// Paradigma Dichiarativo
// Stile Dichiarativo perchè non dichiariamo in 
// maniera esplicita cosa vogliamo fare
// Il paradigma è un modo di vedere le cose

$names = array_map('extractName', $persons);


function extractName($item)
{
    return $item['name'];
}

// var_dump($names);


// Funzione Anonima
// nasce e muore qui dentro

$stortis = array_filter($persons, function ($person) {

    return $person['surname'] == 'Storti';
});

var_dump($stortis);



// QUI ABBIAMO SOLO STACCATO LA FUNZIONE 

$filterstorti = function ($person) {
    return $person['surname'] == 'Storti';
};

$stortis = array_filter($person, $filterstorti);

var_dump($stortis);
