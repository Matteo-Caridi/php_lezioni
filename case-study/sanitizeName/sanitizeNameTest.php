<?php

// Il comando php ... viene eseguito dalla root del progetto
require 'case-study/sanitizeName/sanitizeName.php';

// require './sanitizeName.php';

$dataset = [
    ['mario', 'Mario', __LINE__],
    ['mArio', 'Mario', __LINE__],
    ['MARIO', 'Mario', __LINE__],
    ['De giovanni', 'De Giovanni', __LINE__],
    ['de Giovanni', 'De Giovanni', __LINE__],
    ['Mario83', 'Mario', __LINE__],
    ['Mario@', 'Mario', __LINE__],
    ['<h1>Mario</h1>', 'Mario', __LINE__],
    ['<h1></h1>Mario', 'Mario', __LINE__],
];

foreach ($dataset as $key => $row) {
    $text = $row[0];
    $atteso = $row[1];
    $line = $row[2];


    $result = sanitizeName($text);



    if ($result == $atteso) {
        echo "Test passato - tutto ok nella linea: $line \n";
    } else {
        // echo "Test NON passato nella linea: $line \n";
    }
}
