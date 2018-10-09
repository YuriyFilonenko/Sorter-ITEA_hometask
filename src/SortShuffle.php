<?php

namespace App;


class SortShuffle implements SortTypeInterface
{
    public function sortType(array $data) 
    {
        shuffle($data);
        return $data;
    }
}
