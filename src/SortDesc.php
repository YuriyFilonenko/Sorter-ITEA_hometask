<?php

namespace App;


class SortDesc implements SortTypeInterface
{
    public function sortType(array $data): array 
    {
        rsort($data);
        return $data;
    }
}
