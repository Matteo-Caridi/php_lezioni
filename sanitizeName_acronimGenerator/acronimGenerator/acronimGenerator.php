<?php

function acronimGenerator($text)
{

    $upperCase = ucwords($name);
    $getFirstLetter = preg_replace('/(?![A-Z])./', ' ', $upperCase);
    $addDots = preg_replace('/[ ]+/','.',$getFirstLetter);

    return $addDots;
}
>>>>>>> b514ba5c3d227d25b155726b53e38ec8613c76ea
