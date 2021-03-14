<?php

// Dipendenze
require './lib/JSONReader.php';
require './lib/searchFunctions.php';
// Model
$taskList = JSONReader('./dataset/TaskList.json');

if (isset($_GET['searchText']) && (trim($_GET['searchText']) !== '')) {
    $searchText = trim(filter_var($_GET['searchText'], FILTER_SANITIZE_STRING));
    $taskList = array_filter($taskList, searchText($searchText));
} elseif (isset($_GET['status']) && (isset($_GET['status']) !== '')) {
    $status = $_GET['status'];
    $taskList = array_filter($taskList, searchStatus($status));
} elseif (isset($_GET['expireDate']) && (isset($_GET['expireDate']) !== '')) {
        $expire = $_GET['expireDate'];
        $taskList = array_filter($taskList, searchDate($expire));
}



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
    <form action="index.php">

        <input type="text" name="searchText" value="" placeholder="Inserisci cosa cercare">
        <input type="text" name="expireDate" value="" placeholder="Inserisci data">

        <button type="submit">Cerca</button>

        <div id="status">

            <input type="radio" name="status" value="progress" id="progress">
            <label for="progress">Progress</label>

            <input type="radio" name="status" value="done" id="done">
            <label for="done">Done</label>

            <input type="radio" name="status" value="todo" id="todo">
            <label for="todo">To Do</label>

            <input type="radio" name="status" value="all" id="all">
            <label for="all">Mostra tutto</label>

        </div>

    </form>

    <ul>
        <?php foreach ($taskList as $task) {

            $taskName = $task['taskName'];
            $status = $task['status'];
            $expireDate = $task['expirationDate'];
        ?>
            <li class="tasklist-item tasklist-item-<?= $status ?>">

                <?= $taskName ?>
                <?= '|' ?>
                <?= $status ?>
                <?= '|' ?>
                <?= $expireDate ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>