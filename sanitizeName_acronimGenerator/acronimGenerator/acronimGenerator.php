<?php

function acronimGenerator($text)
{

    $lowerCase = strtolower($text);
    $upperCase = ucwords($lowerCase);
    $acronimo = preg_replace('/(?![A-Z])./', ' ', $upperCase);
    $toglipunti = preg_replace('/[ ]+/','.',$acronimo);

    return $toglipunti;
}
