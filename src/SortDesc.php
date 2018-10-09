<?php

namespace App;


class SortDesc implements SortTypeInterface
{
    public function sortType(array $data) 
    {
        rsort($data);
        return $data;
    }
}
