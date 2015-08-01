<?php
	
# algebraically: 5!
$five = factorial(5);
$five += 1;
echo "5! is {$five}\n\n";
	
# String manipulation:
	
$hello = 'Hello, world!';
$hello .= "\n";

$hello .= 'Goodbye, world.' . "\n";

$hello =<<<ANYTHING_YOU_WANT

Hello world, 
This is a PHP program
I can use "quotes" in this HEREDOC assignment.
Even 'Single Quotes.'
Pretty cool, huh?

ANYTHING_YOU_WANT;

echo $hello;

$integer = 2;
$float = 0;
$integer = $integer / $float;

# Now we're going to explore booleans and control flow

$boolean = false; 
#$boolean = true;

# by request
$sleep = 0;
sleep($sleep);

# standard 'if' conditional statement 
if($boolean == true || $sleep == 1)
	echo 'This is true.'."\n";
elseif(!$boolean && $sleep <= 0)
	echo 'This is some in-between state?' . "\n";
else
	echo 'This is false'."\n";

# integer comparison
$i = 7;

if($i > 10) {
	echo "i is greater than 10\n";
}
elseif($i <= 5) {
	echo "i is less than or equal to than 5\n";
}
else {
	echo "i is between 6 and 10\n";
}

echo $integer;
echo "\n";

// Arrays
$array = array();
$array[0] = 1;
$array[1] = 2;
$array[2] = 3;
$array[3] = 4;

$sum = $array[0] + $array[1] + $array[2] + $array[3];
echo "Sum: {$sum}\n\n";

$cap = 10;
for($index = 0; $index < $cap; ++$index) {
	$array[$index] = $index + 1;
}

$sum = 0;
/*
for($index = 0; $index < $cap; ++$index) {
	$sum += $array[$index];
}
*/
foreach($array as $index => $number) {
	$sum += $number;
}
echo "Sum from 1 to {$cap} is: {$sum}\n\n";

$strings = array();
$strings[] = 'This';
$strings[] = 'is';
$strings[] = 'Sparta!';
$strings[] = "\n";

$message = '';
foreach($strings as $string) {
	$message .= $string . ' ';
}

#$message = implode(' ', $strings);
echo "Message: {$message}";

$i = 0;
while(true) {
	echo rand(0,1);
	
	if($i == 10) {
		break;
	}
	else {
		++$i;
		continue;
	}
	
	// this never gets executed....
	sleep(1000);
}

// Functions

/**
 * Returns the factorial of a $number
 * @param $number Integer is what we're taking the factorial of
 * @param $print Boolean is whether or not to print it out
 * @return Integer the factorial of $number (e.g. $number!)
 */
function factorial($number, $print=false) {	
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