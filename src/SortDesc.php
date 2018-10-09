<?php

namespace App;

/**
 * Implements descending sorting type
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class SortDesc implements SortTypeInterface
{
    /**
     * @param array $data
     *
     * @return array Return descending sorted array
     */
    public function sortType(array $data): array
    {
        rsort($data);
        return $data;
    }
}
