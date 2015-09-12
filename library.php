<?php

$var = 1.0;

/**
 * Get a factor
 * @return Integer
 */
function factor($sanitize=true) {
	if(isset($_GET['factor']))
		if($sanitize)
			return htmlspecialchars($_GET['factor']);
		else
			return $_GET['factor'];
	else
		return 5;
}

/**
 * We have a factor
 * @return Boolean
 */
function hasFactor() {
	return (isset($_GET['factor']) && is_numeric($_GET['factor']));
}

/**
 * Returns the factorial of a $number
 * @param $number Integer is what we're taking the factorial of
 * @param $print Boolean is whether or not to print it out
 * @return Integer the factorial of $number (e.g. $number!)
 */
function factorial($number=5, $print=false) {	
	$factor = abs($number);
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

/**
 * Returns the primary colors used in CSS
 * @return Array of colors
 */
function getArray() {
	return array('Red', 'Green', 'Blue');
}

/**
 * Returns the list of gender types
 * @return Array of genders
 */
function getGenders() {
	return array('m' => 'Male', 'f' => 'Female', 'n/a' => 'Other');
}

/**
 * This is called on each page load
 */
function startup() {
	session_start();
	
	// keep track of visits:
	if(!isset($_SESSION['visits']))
		$_SESSION['visits'] = 1;
	else
		++$_SESSION['visits'];
	
	$GLOBALS['authenticated'] = false;
	
	if(!isset($_POST['name']) || !isset($_POST['password']))
		return;
		
	if(strtolower($_POST['name']) != 'tony' || $_POST['password'] != '123123')
		return;
	
	// everything checks out:
	$GLOBALS['authenticated'] = true;
	$GLOBALS['name'] = $_POST['name'];
}

startup();