<?php

require_once __DIR__."/../class/admin.php";

$result = array(
		'success' => false,
		'message' => ''
		);

try {
	$user = new admin();
	$m_Id=$_POST['m_Id'];
	$teamname=$_POST['teamname'];
	$run=$_POST['run'];
	$ball=$_POST['ball'];
	$four=$_POST['four'];
	$six=$_POST['six'];
	$sr=$_POST['sr'];
	$wc=$_POST['wc'];
	$bball=$_POST['bball'];
	$r_g=$_POST['r_g'];
	$eco=$_POST['eco'];
	$ct=$_POST['ct'];
	$st=$_POST['st'];
	$rout=$_POST['rout'];
	/*$name = $_GET['name'];
	$pass = $_GET['roll'];
	$email=$_GET['price'];
	$teamname=$_GET['teamname'];*/

	//$name = $_POST['teamname'];
	//$name1 = $_POST['teamname1'];
	

	//$playerList=$user -> updatetable($m_Id,$P_ID,$point);
	//$playerList=$user -> updatetable(7);
	//$user-> addmatchplayer(11,"mushfiqur rahim",0,0,0,0,0,0,0,0,0,0,0,0);
	$user->addmatchplayer($m_Id,$teamname,$run,$ball,$four,$six,$sr,$wc,$bball,$r_g,$eco,$ct,$st,$rout);
	$playerList=$user ->updaterank();
	$result['message'] = 'Added Successfully';
	$result['success'] = true;
}

catch(Exception $e) {
	$result['message'] = $e->getMessage();
	$result['success'] = false;
}

echo json_encode($playerList);