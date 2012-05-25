<?php
$data = array(
    'title'    => 'how to work with iterators',
    'posts' => array(
        array(
        'title'  => 'introduction to iterators',
        'email'  => 'JohnDoe@example.com'
     ), array(
        'title'  => 'extending iterators',
        'email'  => 'JaneDoe@example.com'
     )
));

foreach (new RecursiveArrayIterator($data) AS $field => $val) {
    echo $field . ": " . $val . "\n";
}

echo "\nWith Recursive Iterator Iterator: \n\n";
foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($data)) AS $field => $val) {
    echo $field . ": " . $val . "\n";
}