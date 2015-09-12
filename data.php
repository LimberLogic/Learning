<?php

setData();
#modifyData();
#searchData();
getData();
#storePassword('S3cret!');
#storePassword('S3cret');

function storePassword($plaintext) {
	echo crypt($plaintext, $plaintext) . "\n";
}

function setData() {
	$data = array('Anthony' => 2, 'Kim' => 7, 'Danny' => 5, 'Jerry' => 2, 'Dakota' => 1, 'Drew' => 9);
	$store = json_encode($data);
	echo $store . "\n";
	
	file_put_contents('./data.txt', $store);
	echo "File written.\n";
}

function searchData() {
	$string = file_get_contents('./data.txt');	
	$data = json_decode($string, true);
	
	$highestName = '';
	$highestRank = 0;
	foreach($data as $name => $rank) {
		# first run:
		if(empty($highest)) {
			$highestName = $name;
			$highestRank = $rank;
			continue;
		}
		
		# every additional loop:
		if($rank > $highestRank) {
			$highestName = $name;
			$highestRank = $rank;
		}
	}
	
	echo "Highest rank is {$highestName} with a rank of {$highestRank}\n";
}

function getData() {
	$string = file_get_contents('./data.txt');
	
	echo $string . "\n";
	
	$data = json_decode($string, true);
	
	var_dump($data);
		
	echo "We're done.\n";
}

function modifyData() {
	$string = file_get_contents('./data.txt');
	$data = json_decode($string, true);
	$data[] = 'Proton';
	$string = json_encode($data);
	file_put_contents('./data.txt', $string);
}

function getDataWrong() {
	$string = file_get_contents('./data.txt');
	
	echo $string . "\n";
	
	$data = explode('|', $string);
	
	var_dump($data);
		
	echo "We're done.\n";
}

function setDataWrong() {
	$data = array('Anthony', 'Kim', 'Danny', 'Jerry', 'Dakota', 'Drew');
	$store = implode('|', $data);
	
	echo $store . "\n";
	
	file_put_contents('./data.txt', $store);
	echo "File written.\n";
}

function sanitizeWrongInput($input) {
	$safe = str_replace('|', '', $input);
	
	return $safe;
}