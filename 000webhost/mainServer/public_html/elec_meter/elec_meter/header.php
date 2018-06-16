	<header>
		<div class = "appname">Automatic Meter Management System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['user_name']; ?> <a href="logout.php">Log out</a></div>
	</header>

	<style type="text/css">
		
		header{
			color: white;
			padding: 10px;
			background: black;
			overflow: auto;
		}

		header .appname {
			float: left;
		}

		header .loggedin {
			float: right;
		}		

		body{
			font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;	
		}

	</style>