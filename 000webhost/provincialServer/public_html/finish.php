<?php 
	
	echo "<br>--All complete--<br>";

	$fileName = $_GET['fileName'];
	header("Location: finish.php?fileName=$fileName");

 ?>