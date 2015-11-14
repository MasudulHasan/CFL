<?php

require_once __DIR__."/../class/User.php";

$result = array(
		'success' => false,
		'message' => ''
		);

try {
	$user = new User();
	$userList = $user -> getUsers();

	$result['message'] = 'Got Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($userList);