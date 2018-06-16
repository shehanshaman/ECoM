<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>

<?php 

	//check for form submition
	//if user press submit button the return ture value from isset
	if (isset($_POST['submit'])){

		$errors = array();

		//check if the username and password has been entered
		if (!isset($_POST['user']) || strlen(trim($_POST['user'])) < 1){
			$errors[] = 'Username is missed / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
			$errors[] = 'Password is missed / Invalid';
		}

		//check if there any errors in the form
		if (empty($errors)) {
			//save username and password into variables
			$email = mysqli_real_escape_string($connection,$_POST['user']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$hashed_password = sha1($password);

			//prepare database query
			$query = "SELECT *FROM admin_tb WHERE name = '{$email}'
						AND password = '{$hashed_password}' 
						LIMIT 1";

			$result_set = mysqli_query($connection,$query);
			
			verify_query($result_set);
				//query succesfful

				if (mysqli_num_rows($result_set) == 1 ){
					//valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['user_name'] = $user['name'];
					//updating last login 
					$query = "UPDATE admin_tb SET last_login = NOW()";
					$query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1"; 

					$result_set = mysqli_query($connection,$query);

					verify_query($result_set);

					//redirect to users.php
					header('Location: admin_access.php');
				}
				else{
					//user name and password invalid
					$errors[] = 'Invalid Username / password';
				}
			 
		}

	}


 ?>

<!DOCTYPE html>

<html>

	<head>
		<title>admin_login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/admin_login.css">
	</head>

	<body>

		<form action="admin_login.php" method="post">

			<div class="container" style="margin-top: 15%;">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default">
							<h4>Admin Login</h4><br>
								<?php
									if (isset($errors) && !empty($errors)){
										echo '<p class="errors" style="color:red;">Invalid Username or Password</p>';
									}
				 				?>	
							<div class="panel-body">
								<form action="">
									<div class="form-group">
										<input style="margin-top: 20px;" type="username" name="user" class="form-control" placeholder="Enter User Name">
									</div>
									<div class="form-group">
										<input type="password" style="margin-top: 20px;"  name="password" class="form-control" placeholder="Enter password">
									</div>
									<div class="form-group">
										<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Login">
									</div>
								</form>
							</div>
							<div class="lock"><i class="fa fa-lock"></i></div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>

</html>

