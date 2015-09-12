<?php
/*
 * MVC Controller
 */
include 'Model.php';
 
$GLOBALS['title'] = 'MVC Page';
$GLOBALS['success'] = false;
$GLOBALS['error'] = false;

# detect they submitted POST data:
if(isset($_POST['submitted'])) {
	$users = new Users();
	$user = new User();
	
	$user->name = $_POST['fname'] . ' ' . $_POST['lname'];
	$user->age = $_POST['age'];
	$user->email = $_POST['email'];
	$GLOBALS['success'] = $users->addUser($user);
	$users->save();
	
	# error occurred (duplicate email)
	if($GLOBALS['success'] == false)
		$GLOBALS['error'] = true;
}

include 'view.php';
exit();