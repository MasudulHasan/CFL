<?php
session_start();
    //session_destroy();
    // Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['user'])) {
  header('Location:/CFL/login.php');
}
require_once __DIR__."/../class/User.php";

$result = array(
		'success' => false,
		'message' => ''
		);

try {
	$user = new User();
	$name =$_POST['name'];
	//$name=$_GET['name'];
	//echo $name;
	//$id=7;

	$id=$_SESSION['user'];
	
	//$name='mominul haque';
	
	//$email=$_POST['email'];
	//$teamname=$_POST['teamname'];

	$user->removeplayer($name,$id);
	$result['message'] = 'deleted';
	$result['success'] = true;
	
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);