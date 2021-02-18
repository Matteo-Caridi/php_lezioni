<?php

$nome = "Mario";

// Single quote


echo 'Ciao mi chiamo $nome' . "\n";

// Simbolo per andare a capo
// echo "\n";


// Double quote

echo "Ciao mi chiamo $nome \n";
echo "$nome ha detto: \" dammi \$5  e 1\\4 \" \n";

// Situazioni più complesse

echo "$nome è composto da " . strlen($nome) . ' lettere ';
