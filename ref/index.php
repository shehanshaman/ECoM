<?php require_once('connection/connection.php'); ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
  <body>

<?php

	if (isset($_GET['id']) && isset($_GET['value'])) {
		$id = mysqli_real_escape_string($connection,$_GET['id']);
		$value = mysqli_real_escape_string($connection,$_GET['value']);
		$query = "insert into data values ({$id},{$value})";

		$result_set = mysqli_query($connection,$query);
		
		if($result_set) echo "succeess : add details";
		else echo "error on adding details"; 
	}else echo "Access denid";	

?>

</body>
</html>

<?php mysqli_close($connection); ?>