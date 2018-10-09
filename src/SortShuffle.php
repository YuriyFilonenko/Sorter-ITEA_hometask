<?php

namespace App;

/**
 * Implements shuffle sorting type
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class SortShuffle implements SortTypeInterface
{
    /**
     * @param array $data
     *
     * @return array Return shuffle sorted array
     */
    public function sortType(array $data): array
    {
        shuffle($data);
        return $data;
    }
}
