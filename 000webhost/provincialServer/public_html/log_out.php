<?php 
	ob_start();
	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		# code...
		setcookie(session_start(),'',time()-86400,'/');
	}

	session_destroy();

	$fileName = $_GET['fileName'];

	header("Location: finish.php?fileName=$fileName");

 ?>