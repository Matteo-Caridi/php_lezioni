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
        if ($status !== 'all') {
            $result = (strpos($taskItem['status'], $status)) !== false;
            return $result;
        } else {
            return $taskItem;
        }
    };
}

function searchDate($expire){
    return function ($taskItem) use($expire){
        return (strpos($taskItem['expirationDate'],$expire)!== false);
    };
}