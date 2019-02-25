
<?php require_once('connection/connection.php'); ?>

<?php 
    
    if (isset($_POST['reset'])) {
		//echo "enter";
		$query = "DELETE FROM data";
		$result_set = mysqli_query($connection, $query);
	}else{
	    //echo "not enter";
	}
	
	$add_query = '';

	$query = "SELECT * from data";
	$details = mysqli_query($connection, $query);
	$admins_details = "";
	while ($user = mysqli_fetch_assoc($details)) {
		# code...
		$admins_details .= "<tr>";
		$admins_details .= "<td>{$user['id']}</td>";
		$admins_details .= "<td>{$user['value']}</td>";
		$admins_details .= "</tr>";
	}


	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta http-equiv="refresh" content="4">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
</head>
<body>

	<div class="wrapper clearfix"></div>
		
			<table class="admins_details table table-striped">

				<tr>
					<th>Id</th>
					<th>Value</th>
				
				</tr>

				<?php echo $admins_details; ?>
			</table>
		
	</div>
	
	<div>
		<form action="view.php" method = "post">
			<input type="submit" name="reset" value="reset"></input>
		</form>
	</div>

</body>
</html>
<?php mysqli_close($connection); ?>
