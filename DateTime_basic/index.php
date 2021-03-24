<?php

//un minuto prima del 01-01-1970
$passato = new DateTime('1969-12-31 23:59:00');
echo $passato -> getTimestamp()."\n";

//data inizio tempo in informatica
$unix = new DateTime('1970-01-01 00:00:00');
echo $unix -> getTimestamp()."\n";

//un minuto dopo
$un_minuto_dopo = new DateTime('1970-01-01 00:01:00');
echo $un_minuto_dopo -> getTimestamp()."\n";

//un ora dopo
$un_ora_dopo = new DateTime('1970-01-01 01:00:00');
echo $un_ora_dopo -> getTimestamp()."\n";

//secondi passati dal 01-01-1970 fino ad oggi
$unix2 = new DateTime('now');
echo $unix2-> getTimestamp()."\n";

$today = new DateTime();
echo $today -> getTimestamp()."\n";

echo $today-> format('d F Y')."\n";
echo $today-> format('d M Y')."\n";
echo $today-> format('l d M Y')."\n";

//se true è già passato
    //data task                 //data di oggi
echo ($passato->getTimestamp()< $today->getTimestamp());
$settimana = [
    
        'it_IT'=>[
            'domenica',
            'lunedì',
            'martedì',
            'mercoledì'
        ],
    
    
];

echo "oggi è: ". $settimana['it_IT'][$today->format('w')];