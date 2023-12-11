<?php

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

function makeErrors($messages)
{
    $allmessages = [];

    foreach ($messages as $mymessage) {
        array_push($allmessages, $mymessage[0]);
        $showingmessages = implode(",", $allmessages);
    }
    return $showingmessages;
}

// paginator for array must move
function paginateArray($items, $perPage = 25, $page = null, $options = [])
{
    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
    $items = $items instanceof Collection ? $items : Collection::make($items);
    return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}
