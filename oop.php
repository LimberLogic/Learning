<?php
include 'templating.php';

class Silverware {
	protected $coordinates = array(
		'x' => 0,
		'y' => 0,
		'z' => 1
	);
	public $cleanliness = 1.0; # between 0 and 1.0, where 1.0 = completely clean
	
	function __construct($cleanliness=1.0) {
		$this->cleanliness = $cleanliness;
	}
	
	function setCleanliness($cleanliness) {
		$this->cleanliness = $cleanliness;
	}
	
	function getClean() {
		$this->cleanliness = 1.0;
	}
	
	function getCoordinates() {
		return $this->coordinates;
	}
	
	function moveTo($x, $y, $z=1) {
		if(abs($x) > 100 || abs($y) > 100 || abs($z) > 10)
			return;
		
		$this->coordinates = array(
			'x' => $x,
			'y' => $y,
			'z' => $z
		);
	}
	
	static function staticMethod() {
		return 5;
	}
	
	static function cutWithKnife(&$knife) {
		$knife->cut();
	}
}

class Spoon extends Silverware {
	function scoop() {
		$this->cleanliness -= 0.1;
	}
	
	function bend() {
		$this->coordinates['x'] -= 4;
		$this->coordinates['y'] -= 2;
	}
}

class Knife extends Silverware {
	protected $sharpness = 1.0;
	
	function getSharpness() {
		return $this->sharpness;
	}
	
	function setCleanliness($cleanliness) {
		return; # discard custom cleanliness
	}
	
	function cut() {
		$this->cleanliness -= 0.25;
		$this->sharpness -= 0.1;
	}
	
	function __construct($cleanliness=1.0) {
		parent::__construct($cleanliness);
		$this->cleanliness = 1.0;
		$this->sharpness = 1.0;
	}
	
	function __destruct() {
		print "Goodbye, cruel world.";
	}
	
	function sharpen() {
		$this->sharpness = 1.0;
	}
}

function modelSilverware() {
	$obj = new Spoon();
	print($obj->cleanliness);
	$obj->moveTo(1, 2);
	$obj->scoop();
	return $obj->cleanliness;
}
