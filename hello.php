<?php
	
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

$integer 
= 
2;
$float = 2.5;
$integer = $integer + $float;

# Now we're going to explore booleans and control flow

$boolean = false;
#$boolean = true;

# by request
$sleep = 1;
sleep($sleep);

# standard 'if' conditional statement 
if($boolean) {
	echo 'This is true.'."\n";
}
else {
	echo 'This is false'."\n";
}

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

/* 
This line is commented out so we can consolidate calls to echo().
echo "\n";	
*/