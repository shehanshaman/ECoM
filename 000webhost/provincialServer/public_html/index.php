<?php
    ob_start();
	session_start();
	require_once('inc/connection_province.php');
	date_default_timezone_set('Asia/Colombo');

	$MAX = 2;
	
	$server_time = date("H:i");
	$endTime = strtotime("+5 minutes", strtotime($server_time));
	$startTime = strtotime("-5 minutes", strtotime($server_time));

	

	if(isset($_GET['meter_id']) && isset($_GET['password']) && isset($_GET['time'])){

		//check user is valid?
		$meter_id = mysqli_real_escape_string($connection, $_GET['meter_id']);
		$password = mysqli_real_escape_string($connection, $_GET['password']);

		$query = "SELECT * FROM meter_tb WHERE meter_id='{$meter_id}' AND password='{$password}'";
		$result = mysqli_query($connection,$query);

		if($result){
			//valid meter found

			//checking time 
			$time = mysqli_real_escape_string($connection, $_GET['time']);
			$time = strtotime($time);

			if($time > $startTime && $time < $endTime){
				//time is ok
				//echo "time ok";

				if(isset($_GET['preData']) && isset($_GET['newData'])){

					$preData = mysqli_real_escape_string($connection, $_GET['preData']);
					$newData = mysqli_real_escape_string($connection, $_GET['newData']);

					$startDate = time();
					$startTime =  date('Y-m-d H:i:s', strtotime('-60 minutes', $startDate));
					$endTime =  date('Y-m-d H:i:s', strtotime('0 minutes', $startDate));
					$updateTime =  date('Y-m-d H:i:s', strtotime('-30 minutes', $startDate));

					//checking last data added or not?
					$query = "SELECT * from reading_tb WHERE time > '{$startTime}' AND time < '{$endTime}' AND meter_id = '{$meter_id}'";
					$result = mysqli_query($connection,$query);

					if($result){
						//query success
						//echo $query."<br>";
						//echo mysqli_num_rows($result)."<br>";
						if(mysqli_num_rows($result) == 0 && mysqli_num_rows($result) < 2){
							//add previese data
							$query = "INSERT INTO reading_tb (meter_id,units,time) VALUES ('{$meter_id}',{$preData},'{$updateTime}')";
							$result = mysqli_query($connection,$query);

							if($result){
								//prev data add success
								echo "Prev data add completer <br>";
							}else{
								//prev data not adding
								echo "Prev data adding error <br>";
							}

						}else{
							//there has query
							echo "There has more on last date query <br>";
						}
					}else{
						//quey unsussess
						echo "chaking last data query error <br>";
					}

					//adding new data
					$query = "INSERT INTO reading_tb (meter_id,units,time) VALUES ('{$meter_id}',{$newData},NOW())";
					$result = mysqli_query($connection,$query);

					if($result){
						//new data add success
						echo "New data add completer <br>";
					}else{
						//new data not adding
						echo "new data adding error <br>";
					}

					$query = "SELECT SUM(isUploaded) FROM reading_tb";

					$result = mysqli_query($connection,$query);

					if($result){
						//sum quey succes

						$get  = mysqli_fetch_assoc($result);
						$count = $get['SUM(isUploaded)'];

						//echo $count."<br>";
						if($count > $MAX){
							$_SESSION['user_name'] = "admin";
							//send data to main server
							echo "Locate >> data_pack<br>";
							header("Location: data_pack.php");
						}

						
					}else{
						//sum query error
						echo "sum query error <br>";
					}



				}else{
					//data not set
					//print error
					echo "not set data <br>";
				}



			}else{
				echo "time wrong  <br>";
				//reset meter time or sent alert to main server
			}

		}else{
			//Access denid
			echo "Access Denid <br>";
		}

	}else{
		//invalid argument
		//error 404
		echo "Invalid argument <br>";
		//echo "The time is " . (date("h:i")+0:5);
		//echo $endTime." ".$startTime." ".$time;
	}
//echo $endTime." ".$startTime." ".$time;

 ?>