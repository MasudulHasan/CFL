<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:/CFL/login.php');
}

require_once __DIR__."/template/editprofile-template.php";
