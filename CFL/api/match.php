<?php
session_start();
require_once __DIR__."/../class/admin.php";

$result = array(
		'success' => false,
		'message' => ''
		);
try {
	$user = new admin();
	//$name =$_GET['name'];
	//echo $name;
	$Id=$_SESSION['user'];
	//$Id=1;

	$playerList = $user ->matchstat($Id);

	$result['message'] = 'Got Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($playerList);