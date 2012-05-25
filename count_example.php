<?php

$myArray = array(2,4,5,67,8,434,2,352362);

// ArrayIterator implements countable
$it = new ArrayIterator($myArray);

// LimitIterator/FilterIterator do NOT implement countable
$it = new LimitIterator($it, 0, 3);

echo "Total Elements: " . count($it) . "\n";

echo "Total Elements Inner: " . count($it->getInnerIterator());