<?php

namespace App;

class SortTypeFactory 
{
    public function createSortAsc(): SortAsc
    {
        return new SortAsc();
    }
    
    public function createSortDesc(): SortDesc
    {
        return new SortDesc();
    }
    
    public function createSortShuffle(): SortShuffle
    {
        return new SortShuffle();
    }
}
