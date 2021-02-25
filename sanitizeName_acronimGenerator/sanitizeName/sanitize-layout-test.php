<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize Name Test Layout</title>
    <style>
        .card {
            border: 1px solid;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }

        .card-fail {
            color: hsl(0, 100%, 50%);
            background-color: hsl(0, 100%, 95%);
        }

        .card-pass {
            color: hsl(120, 100%, 25%);
            background-color: hsl(120, 100%, 95%);
            ;
        }
    </style>
</head>

<body>
    <?php

    // Il comando php ... viene eseguito dalla root del progetto
    require 'sanitizeName.php';

    // require './sanitizeName.php';

    $dataset = [
        ['mario', 'Mario', __LINE__],
        ['mAriO', 'Mario', __LINE__],
        ['MARIO', 'Mario', __LINE__],
        ['De giovanni', 'De Giovanni', __LINE__],
        ['de giovanni', 'De Giovanni', __LINE__],
        ['de Giovanni', 'De Giovanni', __LINE__],
        ['de Giovanni      ', 'De Giovanni', __LINE__],
        ['de                     Giovanni      ', 'De Giovanni', __LINE__],
        ['de    Giovanni      ', 'De Giovanni', __LINE__],
        ['de 55 Giovanni', 'De Giovanni', __LINE__],
        ['Mario83', 'Mario', __LINE__],
        ['Mario@', 'Mario', __LINE__],
        ['Mario@     ', 'Mario', __LINE__],
        ['John Romita Sr.', 'John Romita Sr.', __LINE__],
        ['John Romita Jr.', 'John Romita Jr.', __LINE__],
        ['John Romita Jr.', 'John Romita Jr.', __LINE__],
        ['<h1>John123456789</h1>', 'John', __LINE__],
        ['<script>alert("ciccio")</script>', '', __LINE__],
        ['    <h1>   John123456789   </h1>   ', 'John', __LINE__],

    ];

    foreach ($dataset as $key => $row) {
        $text = $row[0];
        $atteso = $row[1];
        $line = $row[2];


        $result = sanitizeName($text);

        if ($result === $atteso) {
            echo '<div class="card card-pass">';
            echo "PASS line:" . $line . "<br \>";
            echo "Valore atteso: " . $atteso . " (" . gettype($atteso) . ")<br \>";
            echo "Valore inserito: " . $result . " (" . gettype($result) . ")<br \>";
            echo "</div>";
        } else {
            echo  "<div class='card card-pass'>";
            echo "FAIL line:" . $line . "<br \>";
            echo "Valore atteso: " . $atteso . " (" . gettype($atteso) . ")<br\>";
            echo "Valore inserito: " . $result . " (" . gettype($result) . ")<br \>";
            echo  "</div>";
        }
    } ?>
</body>

</html>