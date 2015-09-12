<?php
	
header('Content-type: application/json');

# Add this to appreciate async on a local server!
#sleep(4);

$data = array();

$data[] = array(
	'email' => 'test@example.com',
	'name' => 'Tester Testingon'
);

$data[] = array(
	'email' => 'test2@example.com',
	'name' => 'Tester Testingon II'
);

$data[] = array(
	'email' => 'test3@example.com',
	'name' => 'Tester Testingon III Earl of QA'
);

$data[] = array(
	'email' => 'test4@example.com',
	'name' => 'Newus Guyus IV'
);

echo json_encode($data);