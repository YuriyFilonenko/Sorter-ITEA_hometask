<?php

namespace App;

/**
 * Abstract factory for creating sorting types
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class SortTypeFactory
{
    /**
     * Create ascending sorting type
     *
     * @return SortAsc|SortTypeInterface
     */
    public function createSortAsc(): SortAsc
    {
        return new SortAsc();
    }
    
    /**
     * Create descending sorting type
     *
     * @return SortDesc|SortTypeInterface
     */
    public function createSortDesc(): SortDesc
    {
        return new SortDesc();
    }
    
    /**
     * Create shuffle sorting type
     *
     * @return SortShuffle|SortTypeInterface
     */
    public function createSortShuffle(): SortShuffle
    {
        return new SortShuffle();
    }
}
