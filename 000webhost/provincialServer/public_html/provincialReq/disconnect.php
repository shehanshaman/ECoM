<!-- pass data to regional server and updata disconnect tables -->

<?php require_once('../inc/connection_province.php'); ?>

<?php 

	if(isset($_GET['meter_id'])){

		$meter_id = $_GET['meter_id'];

		$query = "INSERT INTO disconnect_tb(meter_id,time,isRepaired) VALUES ('{$meter_id}',NOW(),0)";

		mysqli_query($connection_pro,$query);

		header("Location: http://localhost/MyphpActivities/elec_meter/disconect/disconnectGet.php?meter_id=$meter_id");

	}
	else{
		echo "erro";
	}

 ?>