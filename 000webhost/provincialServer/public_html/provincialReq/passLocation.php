<?php require_once('../inc/connection.php'); ?>

<?php 

	if(isset($_GET['meter_id'])){

		$lat = $_GET['location_lat'];
		$lng = $_GET['location_lng'];
		$meter_id = $_GET['meter_id'];

		$query = "UPDATE meter_tb SET location_lat='{$lat}',location_lng='{$lng}',connectivity=1 WHERE meter_id = {$meter_id}";

		mysqli_query($connection,$query);
	}
	else{
		//echo $query;
	}

 ?>