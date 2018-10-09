<?php

namespace App;


class Sorter 
{
    private $data;
    private $sortType;
    
    public function __construct(array $data, SortTypeInterface $sortType) 
    {
        $this->data = $data;
        $this->sortType = $sortType;
    }
    
    public function setSortType(SortTypeInterface $sortType)
    {
        $this->sortType = $sortType;
    }


    public function sort()
    {
        return $this->sortType->sortType($this->data);
    }
}
