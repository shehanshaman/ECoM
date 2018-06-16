<?php 

	$connection_pro = mysqli_connect('localhost','id5778277_admin123','admin','id5778277_provitial');
    //$connection = mysqli_connect('localhost','id5778277_admin','admin','id5778277_mainserverdatabase');
    
	if(mysqli_connect_errno()){
		die('Database connection failed '. mysqli_connect_error());
	}else{
		//echo "Successfully connected"; 
	}

 ?>