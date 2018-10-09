#!/usr/bin/env php
<?php

use App\Sorter;
use App\SortAsc;
use App\SortDesc;
use App\SortShuffle;

require_once __DIR__ . '/../vendor/autoload.php';


$data = [5,8,11,32,54,3,6,7,88,999];

$sorterAsc = new Sorter(new SortAsc);
$resultAsc = $sorterAsc -> sort($data);

$sorterDesc = new Sorter(new SortDesc);
$resultDesc = $sorterDesc -> sort($data);

$sortShuffle = new Sorter(new SortShuffle);
$resultShuffle = $sortShuffle -> sort($data);



print_r($resultAsc);
print_r($resultDesc);
print_r($resultShuffle);
