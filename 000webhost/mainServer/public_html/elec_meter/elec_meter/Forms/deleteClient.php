<?php ob_start(); ?>

<?php 

//client delete from database do in hear
	$connection = mysqli_connect('localhost','id5778277_admin','admin','id5778277_mainserverdatabase');

	if (isset($_GET['client_id'])) {
		$user_id = mysqli_real_escape_string($connection,$_GET['client_id']);

			$query = "UPDATE client_tb SET is_delete = 1 WHERE client_id = {$user_id} LIMIT 1";
			$result = mysqli_query($connection,$query);

			if ($result) {
				header('Location:../Admin_search/admin_search.php');
			}
			else{
				header('Location:../Admin_search/admin_search.php');
			}
		
	}
	else{
		header('Location:users.php');
	}

?>