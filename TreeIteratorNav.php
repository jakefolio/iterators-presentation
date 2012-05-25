<?php
$nav = array(
	'Home',
	'About' => array(
		'leadership',
		'careers',
		'contact'
	),
	'Resources' => array(
		'Download PDFs',
		'Blog',
		'White Papers'
	),
	'Locations' => array(
		'Dallas',
		'Chicago',
		'San Francisco',
		'New York'
	)
);
$it = new RecursiveArrayIterator($nav);

foreach (new RecursiveTreeIterator($it) AS $id => $item) {
  echo (strpos($item, 'Array')) ? str_replace('Array', $id, $item) : $item;
  echo "\n";
}