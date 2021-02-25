<?php

function acronimGenerator($text)
{

    $lowerCase = strtolower($text);
    $upperCase = ucwords($lowerCase);
    $getFirstLetter = preg_replace('/(?![A-Z])./', ' ', $upperCase);
    $addDots = preg_replace('/[ ]+/','.',$getFirstLetter);

    return $addDots;
}
