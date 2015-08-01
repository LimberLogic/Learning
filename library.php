<?php

/**
 * Get a factor
 * @return Integer
 */
function factor() {
	if(isset($_GET['factor']))
		return $_GET['factor'];
	else
		return 5;
}

/**
 * Returns the factorial of a $number
 * @param $number Integer is what we're taking the factorial of
 * @param $print Boolean is whether or not to print it out
 * @return Integer the factorial of $number (e.g. $number!)
 */
function factorial($number=5, $print=false) {	
	$factor = $number;
	$ret = 0;
	
	while($factor != 1) {
		if($ret == 0)
			$ret = $factor;
			
		$ret *= ($factor - 1);
		--$factor;
	}
	
	if($print)
		echo "{$number}! is {$ret}\n\n";
		
	return $ret;
}