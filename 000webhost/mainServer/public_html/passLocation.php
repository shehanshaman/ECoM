<?php require_once('elec_meter/elec_meter/inc/connection.php'); ?>

<?php 


    $proName = array("cebprovince02", "", "");

	if(isset($_GET['id'])){

		$lat = $_GET['lat'];
		$lng = $_GET['lng'];
		$meter_id = $_GET['id'];
		$password = $_GET['password'];
		
		$queryNew = "SELECT *FROM meter_tb WHERE meter_id = '{$meter_id}'
						AND password = '{$password}' 
						LIMIT 1";
			$result_set = mysqli_query($connection,$queryNew);

				if (mysqli_num_rows($result_set) == 1 ){
					//valid user found
            		$query = "UPDATE meter_tb SET location_lat='{$lat}',location_lng='{$lng}',connectivity=1 WHERE meter_id = {$meter_id}";
            
            		mysqli_query($connection,$query);
            		echo "ok\n";

            		$rows = [];
                    $row = mysqli_fetch_array($result_set);
            		//echo implode(" ",$row);
                    $proId = $row[10];

                    echo $proName[$proId];
                    echo "\n";
                    
                    date_default_timezone_set('Asia/Kolkata');
                    
                    $timestamp = time();
                    $date_time = date("d-m-Y H:i:s", $timestamp);
                    echo "$date_time";
            		
				}
				else{
					//user name and password invalid
					echo "invalid user";
				}

	}
	else{
		//echo $query;
	}

 ?>