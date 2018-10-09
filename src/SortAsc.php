<?php

namespace App;


class SortAsc implements SortTypeInterface
{
    public function sortType(array $data): array 
    {
        sort($data);
        return $data;
    }
}
