<?php

namespace App;


class Sorter 
{
    private $sorter;
    
    public function __construct(SortTypeInterface $sorter) 
    {
        $this -> sorter = $sorter;
    }
    
    public function sort(array $data)
    {
        return $this -> sorter -> sortType($data);
    }
}
