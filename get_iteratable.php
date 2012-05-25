<?php
class IterableFilterIterator extends FilterIterator {
    public function accept()
    {
        return class_implements($this->current());
    }
}

$classes = new IterableFilterIterator(new ArrayIterator(get_declared_classes()));

foreach ($classes AS $name) {
    echo $name . "\n";
}