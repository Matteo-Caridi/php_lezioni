<?php

// Il comando php ... viene eseguito dalla root del progetto
require 'case-study/sanitizeName/sanitizeName.php';

// require './sanitizeName.php';

$dataset = [

    ['mario', 'Mario'],
    ['MARIO', 'Mario'],
    ['mARIO', 'Mario'],
    ['De giovanni', 'De Giovanni'],
    ['Mario83', 'Mario'],
];

foreach ($dataset as $key => $row) {
    $text = $row[0];
    $atteso = $row[1];

    $result = sanitizeName($text);



    if ($result == $atteso) {
        echo "Test passato - tutto ok \n";
    } else {
        echo "Test NON passato \n";
    }
}
