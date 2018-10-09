<?php

namespace App;

/**
 * Implements ascending sorting type
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class SortAsc implements SortTypeInterface
{
    /**
     * @param array $data
     *
     * @return array Return ascending sorted array
     */
    public function sortType(array $data): array
    {
        sort($data);
        return $data;
    }
}
