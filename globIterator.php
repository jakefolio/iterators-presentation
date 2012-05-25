<?php
$it = new GlobIterator('lib/Zend/*');

foreach ($it AS $path => $file) {
  echo $path . " - " . $file->getFilename() . "<br>";
}