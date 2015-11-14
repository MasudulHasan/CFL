<?php
// Inialize session
session_start();
//session_destroy();
// Check, if username session is NOT set then this page will jump to login page
/*if (!isset($_SESSION['user'])) {
	header('Location:/CFL/login.php');
}*/

require_once __DIR__."/../class/User.php";

$result = array(
		'success' => false,
		'message' => '',
		'playerList' => [],
		'uplayerlist' => []
		);

try {
	$user = new User();
	$name =$_POST['name'];
	//$name=$_GET['name'];
	//echo $name;
	//$id=7;

	$id=$_SESSION['user'];

	$user ->changepassword($id,$name);
	$result['message'] = 'Got Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);