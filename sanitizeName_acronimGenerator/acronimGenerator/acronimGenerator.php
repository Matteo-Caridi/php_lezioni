<?php

function acronimGenerator($text)
{

    $upperCase = ucwords($name);
    $getFirstLetter = preg_replace('/(?![A-Z])./', ' ', $upperCase);
    $addDots = preg_replace('/[ ]+/','.',$getFirstLetter);

    return $addDots;
}
