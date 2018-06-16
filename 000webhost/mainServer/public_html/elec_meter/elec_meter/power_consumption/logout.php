<?php 
	
	session_start();

	//delete data in the session variable
	$SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name() , '' , time()-86400 , '/');
	}

	session_destroy();

	header('Location: ../admin_login.php');
 ?>