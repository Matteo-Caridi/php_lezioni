<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            text-align: center;
            border: 1px solid red;
            width: 200px;
        }
    </style>
</head>

<body>
    <?php

    $colors = ['red', 'green', 'blue'];

    ?>


    <ul>
        <?php foreach ($colors as $color) { ?>
            <li><?php echo $color ?> </li>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach ($colors as $color) {
            echo "<li>$color</li>";
        } ?>
    </ul>
</body>

</html>