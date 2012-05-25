<?php

// Create example multi-dimensional array
$myArray = array(
	'Homepage',
	'Register',
	'About' => array(
		'The Team',
		'Our Story'
	),
	'Contact' => array(
	  'Locations',
	  'Support'
	)
);

// Must extend to update hooks
class HookRecursiveIteratorIterator extends RecursiveIteratorIterator
{
    public function beginChildren()
    {
        echo "<ul>\n";
    }
    
    public function endChildren()
    {
        echo "</ul></li>\n";
    }
}

// Recursively Iterate
$it = new HookRecursiveIteratorIterator(new RecursiveArrayIterator($myArray), RecursiveIteratorIterator::SELF_FIRST);
echo "<ul>\n";
foreach($it AS $k => $v) {
    if ($it->hasChildren()) {
    	echo "<li>{$k}\n";
    	continue;
    }
        
	echo "<li>{$v}</li>\n";
}
echo "</ul>\n";