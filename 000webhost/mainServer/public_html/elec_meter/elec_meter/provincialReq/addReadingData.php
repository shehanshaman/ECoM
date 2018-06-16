<?php require_once('../inc/connection.php'); ?>

<?php

	$fileName = $_GET['fileName'];
	$meter_id = null;
	$unit = null;
	$time = null;

	$row = 1;
	if (($handle = fopen($fileName, "r")) !== FALSE) {
	  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	    $num = count($data);

	    $row++;

	        $meter_id = $data[0];
	        $unit = $data[1];
	        $time = $data[2];

	        echo $time;

		//$query = "INSERT INTO reading_tb(meter_id,time,usage) VALUES ('{$meter_id}','{$time}','{$unit}')";
	        $query = "INSERT INTO `reading_tb` (`meter_id`, `time`, `usage`, `reading_id`) VALUES ('{$meter_id}','{$time}','{$unit}', NULL);";

		mysqli_query($connection,$query);


	  }
	  fclose($handle);
	}

?>