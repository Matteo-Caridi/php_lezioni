<?php

$input = "a@b.it";

$result = filter_var($input, FILTER_VALIDATE_EMAIL);


var_dump($result);


