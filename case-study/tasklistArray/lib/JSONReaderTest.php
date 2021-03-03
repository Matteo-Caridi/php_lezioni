<?php
/**
 * NOTA: Il test deve essere lanciato dalla cartella lib
 */
declare(strict_types=1);
system("clear");
require 'JSONReader.php';
require 'vendor/testTools/testTool.php';


$dataset = [
    [
        'description' => 'Gestione dell\'errore per file inesistente',
        'filepath' => './ciccio.json',
        'error' => 'not-exists',
        'errorCode' => 404
    ],
    [
        'description' => 'Lettura dei dati di un array di 20 elementi',
        'filepath' => 'case-study\tasklistArray\dataset\TaskList.json',
        'type' => 'array',
        'count' => 20
    ],
    [
        'description' => 'Gestione file con errori di sintassi',
        'filepath' => 'case-study\tasklistArray\dataset\TaskList-error.json',
        'error' => 'syntax-error',
        'errorCode' => 123
    ],
    [
        'description' => 'Lettura di un file con un array vuoto',
        'filepath' => 'case-study\tasklistArray\dataset\TaskList-zero.json',
        'type' => 'array',
        'count' => 0
    ],

];

foreach ($dataset as $row) {

    try {
        $filepath = $row['filepath'];
        $actual = JSONReader($filepath);


        if (!isset($row['error'])) {

            $type = $row['type'];
            assertEquals($type, gettype($actual), 'tipo di dato');
            assertEquals($row['count'], count($actual), 'numero di elementi');
        } else {
            assertEquals($row['error'], null, 'era attesa un eccezione');
            assertEquals($row['errorCode'], null, 'era attesa un eccezione');

        }
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . ' ' . $e->getCode() . ' ' .   "line: " . $e->getLine() . "\n";
        // var_dump($e->getMessage() == $row['error']);
        // var_dump($e->getCode() == $row['errorCode']);
    }
};
