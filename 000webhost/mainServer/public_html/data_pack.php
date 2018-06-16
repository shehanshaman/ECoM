<?php 

	session_start();
	require_once('inc/connection_province.php');
	require_once('ftp_fun.php');
	date_default_timezone_set('Asia/Colombo');

	$details = '';
	
	if (!isset($_SESSION['user_name'])) {
		# code...
		http_response_code(404);
		//include('my_404.php'); // provide your own HTML for the error page
		die();
	}else{

		$query = "SELECT * FROM reading_tb where isUploaded = 1";

		$result = mysqli_query($connection,$query);

		if($result){
			//quey succes

			while ($get = mysqli_fetch_assoc($result)) {
				
				$details .= "{$get['meter_id']}";
				$details .= ",";
				$details .= "{$get['units']}";
				$details .= ",";
				$details .= "{$get['time']}";
				$details .= "\r\n";
			}

			$file = 'server0_'.date("Y-m-d_H-i-s").'.csv';
			file_put_contents($file, $details);

			//send to server
			while(!ftp_upload($file));

			$query = "UPDATE reading_tb SET isUploaded = 0  where isUploaded = 1";

			$result = mysqli_query($connection,$query);

			if(!$result){
				//isUpload query not success
				echo "isUpload query not success <br>";
			}

			//echo $file;
			
			header("Location:https://geethpriyanka1994.000webhostapp.com/input/read.php?file_name=$file");
		}
	}

 ?>