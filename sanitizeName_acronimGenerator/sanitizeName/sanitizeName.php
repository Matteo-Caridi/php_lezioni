<?php

function sanitizeName($name)
{
    $noScript = preg_replace('#<script(.*?)>(.*?)</script>#is','',$name);
    $noString = filter_var($noScript, FILTER_SANITIZE_STRING);
    $tinyName = preg_replace('/[^a-z .A-Z]+/m', '', $noString);
    $explodename = explode(' ', $tinyName);
    $correctNames = array_map('correctCase', $explodename);
    $joinString = implode(' ', $correctNames);


    $noSpaceBetween = preg_replace('/[ ]+/m', ' ', $joinString);
    $noSpace = trim($noSpaceBetween);
    return $noSpace;
}


function correctCase($name)
{

    $nameLowercase = strtolower($name);
    $uppercasename = ucfirst($nameLowercase);

    return $uppercasename;
}
