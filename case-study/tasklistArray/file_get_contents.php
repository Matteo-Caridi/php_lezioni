
<?php

    $jsonString = file_get_contents('case-study\tasklistArray\dataset\TaskList.json');
   
    $jsonArray = json_decode($jsonString, true);

    // var_dump($jsonString);


    // echo gettype($jsonString);

    // esempio per stampare valore dell'array associativo
    print_r($jsonArray[17]['expirationDate']);


?>
