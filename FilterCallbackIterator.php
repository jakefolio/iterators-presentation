<?php
/**
* PHP 5.3 version of CallbackFilterIterator
*/
class FilterCallbackIterator extends FilterIterator
{

	protected $callback;

	public function __construct(Iterator $it, $callback)
	{
		$this->callback = $callback;
		parent::__construct($it);
	}	

	public function accept()
	{
		return call_user_func($this->callback, 
							  $this->current(), 
							  $this->key(), 
							  $this->getInnerIterator()
				);
	}
}

$dirIt = new GlobIterator('*.php');

$recursiveFiles = new FilterCallbackIterator($dirIt, function($current, $key, $it) {
	return preg_match('/recursive/i', $current);
});

foreach($recursiveFiles AS $name) {
	echo $name . "\n";
}