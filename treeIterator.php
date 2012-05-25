<?php
$it = new RecursiveDirectoryIterator('lib/Zend');

foreach (new RecursiveTreeIterator($it) AS $file) {
  echo $file . "\n";
}