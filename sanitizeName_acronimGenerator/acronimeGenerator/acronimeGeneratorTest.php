<?php

require 'sanitizeName_acronimGenerator\acronimeGenerator\acronimeGeneratorTest.php';

$dataset =[
    ['gioco molto difficile', 'G.M.D.', __LINE__],
    ['General Motors', 'G.M.', __LINE__],
    ['Federal Bureau Investigation', 'F.B.I.', __LINE__],
];



foreach ($dataset as $key => $row) {
    $text = $row[0];
    $atteso = $row[1];
    $line = $row[2];


    $result = acronimeGenerator($text);



    if ($result == $atteso) {
        echo "Test passato - tutto ok nella linea: $line \n";
    } else {
        // var_dump($result);

        echo "Test NON passato nella linea: $line \n";
    }
}
