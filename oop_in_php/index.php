<?php

require './vendor/JSONReader.php';
require './class/Task.php';

$taskList = JSONReader('./dataset/TaskList.json');

//fonte dei dati
// print_r($taskList);

//paradigma imperativo
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

//paradigma dichiarativo --> programmazione funzionale
//una funzione pura è quella che ogni volta dato lo stesso input
//avremo lo stesso risultato in uscita, es: somma(4,5) --> 9. Questa è una funzione pura
//il nostro metodo isExpired() non èuna funzione pura perchè ogni volta che la lanciamo
//in questo caso con nessun argomento ci da risultati diversi.

//versione con array_map
//usiamo una funzione anonima
//array_map è una funzione di trasformazione
$taskListObj = array_map(function ($taskArray) {

    $taskObj = new Task();
    $taskObj->id = $taskArray['id'];
    $taskObj->taskName = $taskArray['taskName'];
    $taskObj->status = $taskArray['status'];
    $taskObj->expirationDate = $taskArray['expirationDate'];
    return $taskObj;
}, $taskList);

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
    <style>
        body table,
        td {
            border: 1px solid black;
            text-align: center;

        }
    </style>
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
                <td><?php echo $task->isExpired() ? "|" . "scaduto" : "non scaduto" ?></td>
            </tr>

        <?php } ?>

    </table>



</body>

</html>