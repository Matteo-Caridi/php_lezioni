<?php

/**
 * Funzione di ordine superiore che restituisce una funzione
 */

function searchText($searchText)
{
    return function ($taskItem) use ($searchText) {
        $result = strpos($taskItem['taskName'], $searchText) !== false;
        return $result;
    };
}

function searchStatus($status)
{
    return function ($taskItem) use ($status) {
        $result= (strpos($taskItem['status'], $status)) !== false;
        return $result;
    };
}
