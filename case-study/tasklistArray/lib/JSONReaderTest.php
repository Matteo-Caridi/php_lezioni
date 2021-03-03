<?php

declare(strict_types=1);

system("clear");
require 'case-study\tasklistArray\lib\JSONReader.php';
require 'vendor\testTools\testTool.php';


$dataset = [

    [
        'filepath' => './ciccio.json',
        'error' => 'file not exist',
        'errorCode' => 404,
    ],

    [
        'filepath' => 'case-study\tasklistArray\dataset\TaskList.json',
        'type' => 'array',
        'count' => 20,

    ],
    [
        'filepath' => 'case-study\tasklistArray\dataset\TaskList-error.json',
        'error' => 'syntax-error',
        'errorCode' => 123,
    ],
    [
        'filepath' => 'case-study\tasklistArray\dataset\TaskList-zero.json',
        'type' => 'array',
        'count' => 0,
    ],



];

foreach ($dataset as $row) {

    try {
        $filepath = $row['filepath'];
        $actual = JSONReader($filepath);


        if (isset($row['type'])) {
            $type = $row['type'];
            assertEquals('array', gettype($actual), 'ottengo un array');
            if (count($actual) === $row['count']) {
                echo "stesso numero di elementi: " . $row['count'] . "\n";
            };
        }
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . ' ' . $e->getCode() . ' ' .   "line: " . $e->getLine() . "\n";
        // var_dump($e->getMessage() == $row['error']);
        // var_dump($e->getCode() == $row['errorCode']);
    }
};
