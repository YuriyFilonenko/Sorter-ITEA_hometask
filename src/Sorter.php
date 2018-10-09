<?php

namespace App;

/**
 * Implements logic for sorting array
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class Sorter
{
    private $data;
    private $sortType;
    
    public function __construct(array $data, SortTypeInterface $sortType)
    {
        $this->data = $data;
        $this->sortType = $sortType;
    }
    
    public function setSortType(SortTypeInterface $sortType): void
    {
        $this->sortType = $sortType;
    }

    /**
     * @return array Return sorted array
     */
    public function sort(): array
    {
        return $this->sortType->sortType($this->data);
    }
}
