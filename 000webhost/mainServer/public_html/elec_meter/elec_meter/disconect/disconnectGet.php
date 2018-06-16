<!-- get disconnect data from provincial server -->

<?php require_once('../inc/connection.php'); ?>

<?php 

	if(isset($_GET['meter_id'])&&isset($_GET['isActive'])){

		$meter_id = $_GET['meter_id'];
		$isActive = $_GET['isActive'];

		if ($isActive==0) {
			$query = "INSERT INTO disconnect_tb(meter_id,lost_time) VALUES ('{$meter_id}',NOW())";
			$query2 = "UPDATE meter_tb SET connectivity = 0 WHERE meter_id='{$meter_id}'";
			//echo $query;
			mysqli_query($connection,$query);
			mysqli_query($connection,$query2);
			echo "insert";

			//header("Location: http://localhost/MyphpActivities/elec_meter/disconect/disconnectGet.php?meter_id=$meter_id");			
		}
		else{			
			$query2 = "UPDATE meter_tb SET connectivity = 1 WHERE meter_id='{$meter_id}'";
			mysqli_query($connection,$query2);
			echo "updated";
		}

	}
	else{
		echo "erro";
	}

 ?>