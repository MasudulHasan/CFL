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
	//$email=$_POST['email'];
	//$teamname=$_POST['teamname'];

	$temp=$user->checkLogin($name, $pass);
	if($temp!=-1){
		$result['message'] = 'Login Successfully';
		$result['success'] = true;
		session_start();
        $_SESSION['user'] = $temp;
        //header('Location: /CFL/userprofile.php');
        //exit;
	}
	else{
		$result['message'] = 'Username password error';
		$result['success'] = true;
	}
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);