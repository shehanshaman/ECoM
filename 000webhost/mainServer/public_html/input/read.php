<?php 

	require_once('../elec_meter/elec_meter/inc/connection.php');


	if(isset($_GET['file_name'])){
		$file_name = $_GET['file_name'];

		if (($handle = fopen($file_name, "r")) !== FALSE) {
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		 
		        $meter_id = $data[0];
		        $units = $data[1];
		        $time = $data[2];

		        $query = "INSERT INTO `reading_tb` (`meter_id`, `time`, `usage`, `reading_id`) VALUES ({$meter_id}, '{$time}', {$units}, NULL)";

		        $result = mysqli_query($connection,$query);

		        if($result){

		        }else{
		        	echo "Error";
		        }
		    }
		    fclose($handle);
		}
	}else{
		echo "Not set file name";
	}
	
	$row = 1;

	

 ?>