#!/usr/bin/env php
<?php

use App\SortAsc;
use App\SortDesc;
use App\Sorter;
use App\SortShuffle;
use App\SortTypeFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$data = [5,8,11,32,54,3,6,7,88,999];

$factory = new SortTypeFactory();

$sorter = new Sorter($data, $factory->createSortAsc());
var_dump('ASC', $sorter->sort());

$sorter->setSortType($factory->createSortDesc());
var_dump('DESC', $sorter->sort());

$sorter->setSortType($factory->createSortShuffle());
var_dump('SHUFFLE', $sorter->sort());
