<?php

	ini_set('display_errors', 'On');
	define('BASE_URL', 'http://localhost/cw');
	$connection = mysqli_connect('localhost', 'root', '');
	if (!$connection){
	    die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'cw');
	if (!$select_db){
	    die("Database Selection Failed" . mysqli_error($connection));
	}
	// $uri = basename($_SERVER["REQUEST_URI"]);
	// $backgroundColors = array('div' => "lightblue",'h2' => "indigo" );
	// $colors = array('h2p' => "white",'divp' => "blue" );
?>