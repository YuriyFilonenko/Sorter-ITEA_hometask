<?php

namespace App;


class SortShuffle implements SortTypeInterface
{
    public function sortType(array $data): array
    {
        shuffle($data);
        return $data;
    }
}
