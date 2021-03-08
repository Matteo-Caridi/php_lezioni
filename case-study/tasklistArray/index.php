<?php
// Dipendenze
require './lib/JSONReader.php';
// Model
$taskList = JSONReader('./dataset/TaskList.json');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="./asset/style.css">
</head>

<body>
    <form>

        <input type="text" value="" placeholder="Inserisci cosa cercare">
        <button type="submit">Cerca</button>


    </form>

    <ul>
        <?php foreach ($taskList as $task) {

            $taskName = $task['taskName'];
            $status = $task['status'];
        ?>
            <li class="tasklist-item tasklist-item-<?= $status ?>">

                <?= $taskName ?>
                <?= '|' ?>
                <?= $status ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>