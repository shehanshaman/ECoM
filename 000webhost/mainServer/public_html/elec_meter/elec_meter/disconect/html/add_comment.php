<?php 
	
	require_once('functions.php');
	include("connection.php");
	$comment_max = "";
	$comment_details = "";
	$errors = array();
	$disconnect_id = "";
	$path = "";

		$disconnect_id = mysqli_real_escape_string($connection, $_POST['add']);
		$path .= "Location: ./more_details.php?disconnect_id=";
		$path .= $disconnect_id;
		//echo $path;

	if (isset($_POST['submit'])) {

		$query = "SELECT MAX(comment_id) FROM comment_tb;";
		$result_set = mysqli_query($connection, $query);

		if($result_set){

			if(mysqli_num_rows($result_set) == 1){
				//user found
				$result = mysqli_fetch_assoc($result_set);

				$comment_max =	$result['MAX(comment_id)'];
			}
		}

		$comment = $_POST['comment'];

		//checking required fields
		$req_fields  = array('comment');
		
		$errors = array_merge($errors,check_req_fields($req_fields));
		

		$max_len_fields  = array('comment' => 100);

		$errors = array_merge($errors,check_max_len($max_len_fields));
		
		if(empty($errors)){
			//add data to database
			$comment = mysqli_real_escape_string($connection,$_POST['comment']);

			$query = "SELECT * from disconnect_tb where disconnect_id = {$disconnect_id}";
			$result_set = mysqli_query($connection, $query);
			$meter_id = "";

			if($result_set){

				if(mysqli_num_rows($result_set) == 1){
					//user found
					$result = mysqli_fetch_assoc($result_set);

					$meter_id = $result['meter_id'];
				}
			}

		
			$query = "INSERT INTO comment_tb VALUES ({$comment_max}+1,'{$meter_id}','{$comment}',NOW())";
			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				//echo "susses";
				header($path);
			}else{
				//echo "not susses";
			}
		}
	}

 ?>