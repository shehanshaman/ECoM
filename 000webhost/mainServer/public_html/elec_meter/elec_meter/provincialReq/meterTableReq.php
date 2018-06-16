<?php require_once('../inc/connection.php'); ?>

<?php 

	function get_newMeter($connection){

		$query = "SELECT meter_id,client_id FROM meter_tb WHERE meter_id = 451";

		$result = mysqli_query($connection,$query);

		$new_meter = array();

		while($row = mysqli_fetch_assoc($result)){

			$new_meter[] = array(
				'meter_id' => $row["meter_id"],
				'client_id' => $row["client_id"],
				'client_id' => "Gihan123"
			);

		}

		//array data convert into json format
		return json_encode($new_meter);
	
	}
	
	//echo get_newMeter($connection);

	//json file 
	$file_name = date('d-m-Y') . '.json';

	if (file_put_contents($file_name, get_newMeter($connection))) {
		echo $file_name .' file created!!';
		send_file();
	}
	else{
		echo 'error';
	}

function send_file(){

	$source = ("http://localhost/MyphpActivities/elec_meter/provincialReq/03-03-2018.json");
	$destination = 'new.json';

	$data = file_get_contents($source);

	$handle = fopen($destination,"w");
	fwrite($handle, $data);
	fclose($handle);
}

 ?>