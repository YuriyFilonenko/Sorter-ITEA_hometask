<?php

namespace App;

/**
 * Interface of sort type for array
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface SortTypeInterface
{
    /**
     * Sort array with data
     *
     * @param array $data
     *
     * @return array Return sorted array with data
     */
    public function sortType(array $data): array;
}
