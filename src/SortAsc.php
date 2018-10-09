<?php

namespace App;


class SortAsc implements SortTypeInterface
{
    public function sortType(array $data) 
    {
        sort($data);
        return $data;
    }
}
