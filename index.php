<?php

die('here it is');

ini_set('memory_limit',999999999);
ini_set('max_execution_time',120);
if(isset($_REQUEST['debug']) || $_SERVER['REMOTE_ADDR'] == '50.153.51.9') {
	ini_set('display_errors',1);
	error_reporting(E_ERROR);
}
else {
	ini_set('display_errors',0);
}

#ini_set('display_errors',1);
#error_reporting(E_ERROR);
#error_reporting(E_ALL);
#error_reporting(E_WARN);
#error_reporting(E_ERROR);
#error_reporting(E_NONE);

if(file_exists('maintenance.html')) {
	echo file_get_contents('maintenance.html');
	exit();
}

if(is_dir('./install')) {
	header('Location: /install/');
	echo 'Moduity not installed, please <a href="/install/">click here</a> to install.';
	exit();
}

require 'moduity/core/Moduity.php';
Moduity::run();