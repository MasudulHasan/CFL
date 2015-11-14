<?php

require_once __DIR__."/../class/User.php";

try {
	$user = new User();
	$user->increase();
	echo $user->id();
}

catch(Exception $e) {
	echo $e->getMessage();
}
