<?php

require_once __DIR__."/../class/User.php";

$result = array(
		'success' => false,
		'message' => ''
		);

try {
	$user = new User();
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$email=$_POST['email'];
	$teamname=$_POST['teamname'];
	

	$user -> addUser($name,$pass,$email,$teamname);

	$result['message'] = 'Added Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);