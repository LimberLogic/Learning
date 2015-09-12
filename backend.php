<?php
	
include 'model.php';

$GLOBALS['title'] = 'Administrative Interface';
$GLOBALS['users'] = new Users();

include 'backend.phtml';
exit();