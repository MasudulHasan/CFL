<?php
session_start();

require_once __DIR__."/../class/User.php";

$result = array(
		'success' => false,
		'message' => '',
		'userList' => [],
		'userdt' => [],
		'point' => 0
		);

try {
	$user = new User();
	//$id=83;
	$id=$_SESSION['user'];
	$result['userdt']= $user -> getUsers($id);
	$result['userList']= $user -> getuserteam($id);
	$result['point']= $user -> getpoint($id);
	$result['message'] = 'Got Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);