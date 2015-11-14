<?php

require_once __DIR__."/../class/admin.php";

$result = array(
		'success' => false,
		'message' => ''
		);

try {
	$user = new admin();
	/*$name = $_GET['name'];
	$pass = $_GET['roll'];
	$email=$_GET['price'];
	$teamname=$_GET['teamname'];*/

	$name = $_POST['name'];
	$pass = $_POST['roll'];
	$email=$_POST['price'];
	$teamname=$_POST['teamname'];

	$user -> addplayer($name,$pass,$email,$teamname);

	$result['message'] = 'Added Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);