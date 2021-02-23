<?php

require 'sanitizeName_acronimGenerator\acronimGenerator\acronimGenerator.php';

$dataset = [
    ['gioco molto difficile', 'G.M.D.', __LINE__],
    ['General Motors', 'G.M.', __LINE__],
    ['Federal Bureau Investigation', 'F.B.I.', __LINE__],
];

foreach ($dataset as $key => $row) {

    $text = $row[0];
    $atteso = $row[1];
    $line = $row[2];

    $result = acronimGenerator($text);


    if ($result === $atteso) {
        echo 'Test Superato alla linea: $line';
        var_dump($result);

    } else {
        echo 'Test Fallito alla liinea: $line';
        var_dump($result);
    }
}
