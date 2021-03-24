<?php

require "./vendor/testTools/testTool.php";
require "./oop_in_php/class/Task.php";

$testCases = [
    [
        'expirationDate' => '2021-02-24',
        'expectedCount' => true,
        'description' => 'Task scaduta'
    ],
    [
        'expirationDate' => '2021-10-20',
        'expectedCount' => false,
        'description' => 'Task NON scaduta'
    ],
];


foreach ($testCases as $testCase) {

    $task = new Task();
    $task -> expirationDate=$testCase['expirationDate'];

    assertEquals($testCase['expirationDate'], $task->expirationDate, $testCase['description']);
};
