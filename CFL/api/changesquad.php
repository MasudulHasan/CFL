<?php
session_start();
require_once __DIR__."/../class/User.php";

$result = array(
		'success' => false,
		'message' => '',
		'playerList' => [],
		'uplayerlist' => []
		);

try {
	$user = new User();
	$id=$_SESSION['user'];
	$result['playerList'] = $user ->changesquad();
	$result['uplayerList'] = $user ->getuserteam($id);
	$result['message'] = 'Got Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($result);