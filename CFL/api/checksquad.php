<?php
// Inialize session
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
	$id=$_SESSION['user'];
	
	//$name='mominul haque';
	
	//$name=$_GET['name'];
	//$teamname=$_POST['teamname'];
	//$id=7;

	$temp=$user->checkifexists($name,$id);
	$temp1=$user->checkplayernumber($id);
	//if($temp1)echo "ok";
	//else echo "no";
	if($temp1){

		if($temp){
			$result['message'] = 'YOU Have ALREADY TAKE THIS PLAYER';
			$result['success'] = true;
		}
		else{
			$user->adduserteamplayer($name,$id);
			$result['message'] = 'PLAYER added';
			$result['success'] = true;
		}
	}
	else{
		$result['message'] = 'YOU HAVE ALREADY TAKEN 11 PLAYERS ';
		$result['success'] = true;
	}
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);