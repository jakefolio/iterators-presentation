<?php
$it = new FileSystemIterator('lib/Zend');

foreach ($it AS $path => $file) {
  echo $path . " - " . $file->getFilename() . "<br>";
}