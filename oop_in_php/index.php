<?php

require './vendor/JSONReader.php';
require './class/Task.php';

$taskList = JSONReader('./dataset/TaskList.json');

//fonte dei dati
// print_r($taskList);

//array vuoto dove mettere gli oggetti quando abbiamo finito di crearlo
$taskListObj = [];
foreach ($taskList as $taskArray) {
    //conversione dell'array in oggetti (task)
    $taskObj = new Task();
    $taskObj->id = $taskArray['id'];
    $taskObj->taskName = $taskArray['taskName'];
    $taskObj->status = $taskArray['status'];
    $taskObj->expirationDate = $taskArray['expirationDate'];

    //dove mettiamo gli oggetti creati
    $taskListObj[] = $taskObj;
}

//stampiamo il risultato taskListObj
// print_r($taskListObj);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasklist a oggetti</title>
</head>

<body>
    <table>
        <tr>
            <th>chiave</th>
            <th>nome attività</>
            <th>scaduta?</th>
        </tr>

        <?php foreach ($taskListObj as $key => $task) { ?>
            <!-- qui dentro possiamo mettere codice HTML -->

            <tr>
                <td><?= $key ?> </td>
                <td><?php echo $task->taskName ?></td>
                <td><?php echo $task->isExpired() ? "scaduto" : "non scaduto" ?></td>
            </tr>

        <?php } ?>

    </table>



</body>

</html>