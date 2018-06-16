<?php session_start();



if(isset($_SESSION['user_name'])){



}

else{

	header('Location: admin_login.php');

}



?>



<!DOCTYPE html>

<html>



	<head>

		<title>Admin <?php  echo $_SESSION['user_name']?></title>

		<script src="../js/bootstrap.min.js"></script>

		<style type="text/css">



			.selBut{

				color: white;

				background-color: blue;

			}

			.selBut:hover{

				color: blue;

				background-color: white;

			}



		</style>

	</head>



	<body background="img/back.jpg">



		<?php require_once('header.php'); ?>



		<div style="margin-top: 50px; margin-bottom:50px;">



			<center>

					<div class="row">

						<div class="col-sm-6">

							<input type="button" class="selBut" name="" style="width: 250px; height: 250px; margin-right: 50px;" value="search" onclick="location.href='Admin_search/admin_search.php'">

							<input type="button" name="" class="selBut" style="width: 250px; height: 250px;" value="power consumption" onclick="location.href='power_consumption/power_consumption.php'">

						</div>

					</div>



					<div class="row" style="margin-top: 50px;">

						<div class="col-sm-6">

							<input type="button" name="" class="selBut" style="width: 250px; height: 250px;margin-right: 50px;" value="disconnect" onclick="location.href='disconect/html/index.php'">

							<input type="button" name="" class="selBut" style="width: 250px; height: 250px;" value="payment" onclick="location.href='payment/html/index.php'">

						</div>



					</div>

			</center>



		</div>

		

		<?php require_once('footer.php'); ?>	

		

	</body>



</html>