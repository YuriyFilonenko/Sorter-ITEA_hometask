Sorter
======

This is simple library for sort arrays.

Usage
-----

```php
...

$factory = new SortTypeFactory();

$sorter = new Sorter($data, $factory->createSortAsc());
$sorter->sort();

$sorter->setSortType($factory->createSortDesc());
$sorter->sort();

$sorter->setSortType($factory->createSortShuffle());
$sorter->sort();
```
