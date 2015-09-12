<?php

function getHeader($title) {
	$GLOBALS['title'] = $title;
	include 'header.php';
}

function getFooter() {
	include 'footer.php';
}