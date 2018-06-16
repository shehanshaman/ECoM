<?php 

	function verify_query($result_set){

		global $connection;

		if (!$result_set){

			die("Database query failed : ".mysqli_error($connection));

		}
	}

	function check_req_fields($req_fields){
		$errors = array();
		//check required fields
		foreach ($req_fields as $fields) {
			# code...
			if(empty(trim($_POST[$fields]))){
				$errors[] = $fields.' is required';
			}
		}
		return $errors;
	}

	function check_max_len($max_len_fields){
		$errors = array();
		foreach ($max_len_fields as $field => $max_len) {
			# code...
			if(strlen($_POST[$field]) > $max_len){
				$errors[] = $field . ' must be less than '. $max_len .' characters';
			}
		}
		return $errors;
	}

	function display_errors($errors){
		echo '<div class="errmsg">';
					echo '<b>There were error(s) on your form.</b>';
					foreach ($errors as $error) {
						# code...
						echo '<br>- '.$error;
					}
					echo '</div>';
	}

 ?>