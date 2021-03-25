<?php

require '.\vendor\testTools\testTool.php';
require '.\class\Task.php';

$dataset = [
    ['2021-03-23', true, 'task scaduta l\'altro ieri'],
    ['2021-03-24', true, 'task di ieri'],
    ['2021-03-25', false, 'task che scade oggi'],
];

foreach ($dataset as $testCase) {
    list($inputDate, $expected, $description) = $testCase;

    $task = new Task();
    $task->taskName = 'Task';
    $task->expirationDate = $inputDate;
    $task->status = 'done';
    
    assertEquals($expected, $task->isExpired(),$description);
}
