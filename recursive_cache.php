<?php

$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('cache'), RecursiveIteratorIterator::CHILD_FIRST);
array_map('unlink', iterator_to_array($it));