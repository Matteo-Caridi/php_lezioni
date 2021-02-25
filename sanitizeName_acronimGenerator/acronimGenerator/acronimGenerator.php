<?php

function acronimGenerator($text)
{

    $upperCase = ucwords($text);
    $getFirstLetter = preg_replace('/(?![A-Z])./', ' ', $upperCase);
    $addDots = preg_replace('/[ ]+/','.',$getFirstLetter);

    return $addDots;
}
