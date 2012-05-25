<?php 
/* Example found: http://us3.php.net/manual/en/class.regexiterator.php
* RegexIterator::MATCH
* RegexIterator::REPLACE
* RegexIterator::ALL_MATCHES
* RegexIterator::SPLIT
*/
$a = new ArrayIterator(array('test1', 'test2', 'test3')); 
$it = new RegexIterator($a, '/^(test)(\d+)/', RegexIterator::REPLACE); 
$it->replacement = '$2:$1';
foreach($it AS $el) {
  echo $el . "\n";
}