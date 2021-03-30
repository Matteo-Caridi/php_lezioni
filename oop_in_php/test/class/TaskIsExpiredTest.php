<?php

require '.\vendor\testTools\testTool.php';
require '.\class\Task.php';

$dataset = [
    ['2021-03-29', '2021-03-30', true, 'task scaduta ieri'],
    ['2021-03-30', '2021-03-30', false, 'task di oggi'],
    ['2021-03-31', '2021-03-30', false, 'task che scade domani'],
];

foreach ($dataset as $testCase) {
    list($inputDate, $today, $expected, $description) = $testCase;

    $task = new Task();
    $task->taskName = 'Task';
    $task->expirationDate = $inputDate;
    $task->status = 'done';

    try {
        $todayDateTime = new DateTime($today);
        assertEquals($expected, $task->isExpired($todayDateTime), $description);
        assertEquals('boolean', gettype($expected), "il risultato dev'essere un booleano");
    } catch (\Throwable $th) {
        assertEquals('Expectation',$expected, 'Eccezione per formato errato');
    }
}
