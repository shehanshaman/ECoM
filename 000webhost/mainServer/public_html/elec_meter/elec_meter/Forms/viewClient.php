<?php session_start();

if(isset($_SESSION['user_name'])){

}
else{
	header('Location: ../client_login.php');
}

?>
<?php require_once('../inc/connection.php'); ?>
<?php 
		$first_name = "";
		$last_name = "";
		$addr_line1 = "";
		$addr_line2 = "";
		$addr_line3 = "";
		$home_phone = "";
		$mobile_phone = "";
		$nic = "";
		$email = "";
		$tax_number = "";
		$deed_number = "";
		$current = "";
		$purpose = "";
		$meter_ID = "";


	if(isset($_GET['client_id'])){

		$clientID = $_GET['client_id'];

	$query1 = "SELECT * FROM client_tb WHERE client_id = {$clientID}";
	//echo $query1;
	
	$result_set = mysqli_query($connection,$query1);

	if($result_set){
		$record = mysqli_fetch_assoc($result_set);

		$first_name = $record['first_name'];
		$last_name = $record['last_name'];
		$addr_line1 = $record['address'];
		$home_phone = $record['home_phone'];
		$mobile_phone = $record['mobile_phone'];
		$nic = $record['NIC'];
		$email = $record['email'];
		$tax_number = $record['tax_number'];
		$deed_number = $record['deed_no'];
		$current = $record['current'];
		$purpose = $record['purpose'];
		$meter_ID = $record['meter_id'];

		if(!strcmp($current,"15")){
			$current_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"15\" checked=\"checked\" onclick=\"return false\">15 A</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"30\" onclick=\"return false\">30 A</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"60\" onclick=\"return false\">60 A</label>" ;
		}else if(!strcmp($current,"30")){
			$current_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"15\" onclick=\"return false\">15 A</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"30\" checked=\"checked\" onclick=\"return false\">30 A</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"60\" onclick=\"return false\">60 A</label>" ;
		}else if(!strcmp($current,"60")){
				$current_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"15\"  onclick=\"return false\">15 A</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"30\" onclick=\"return false\">30 A</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"current\" value=\"60\" checked=\"checked\" onclick=\"return false\">60 A</label>" ;
		}


		if(!strcmp($purpose,"Domestic")){
			$purpose_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Domestic\" onclick=\"return false\" checked=\"checked\">Domestic</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Merchant\" onclick=\"return false\">Merchant</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Industry\" onclick=\"return false\">Industry</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Other\" onclick=\"return false\">Other</label>" ;
		}else if(!strcmp($purpose,"Merchant")){
			$purpose_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Domestic\" onclick=\"return false\">Domestic</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Merchant\" onclick=\"return false\" checked=\"checked\">Merchant</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Industry\" onclick=\"return false\">Industry</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Other\" onclick=\"return false\">Other</label>" ;
		}else if(!strcmp($purpose,"Industry")){
				$purpose_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Domestic\" onclick=\"return false\">Domestic</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Merchant\" onclick=\"return false\">Merchant</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Industry\" onclick=\"return false\" checked=\"checked\">Industry</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Other\" onclick=\"return false\">Other</label>" ;
		}else if(!strcmp($purpose,"Other")){
				$purpose_final = "<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Domestic\" onclick=\"return false\">Domestic</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Merchant\" onclick=\"return false\">Merchant</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Industry\" onclick=\"return false\">Industry</label>
							<label class=\"radio-inline\"><input type=\"radio\" name=\"purpose\" value=\"Other\" onclick=\"return false\" checked=\"checked\">Other</label>" ;
		}

	
	}

	$query2 = "SELECT client_details.client_ID,meters.meter_ID FROM client_details,meters WHERE client_details.client_ID=meters.client_ID";
	


	}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View client</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<?php require_once('../header.php'); ?>
	
	<div class="container" style="margin-top: 48px; margin-bottom: 48px;">
		<form action="viewClient.php" class="well form-horizontal" method="post" id="contact-form">
			<fieldset>
				<legend><p class="text-center"><i class="glyphicon glyphicon-user"></i>View Client</p></legend>

					<!--First Name-->

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"><mark>Full Name</mark></p></label>

						<label class="col-sm-2 col-xs-12 control_label"><p>First Name</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="first_name" value=<?php echo $first_name; ?> readonly>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"></p></label>
						
						<label class="col-sm-2 col-xs-12 control_label"><p>Last Name</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="last_name" value=<?php echo $last_name; ?> class="form-control" readonly>
							</div>
						</div>
					</div>
					

					<br>

					<!--Address-->

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"><mark>Address</mark></p></label>
						<label class="col-sm-2 col-xs-12 control_label"><p></p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="address_line1" value=<?php echo $addr_line1 ;?> class="form-control" readonly>
							</div>
						</div>
					</div>

					<br>
					
					<!--Phone Numbers-->
					
					<div id="col1" style="width :50%; height: 100%; float: left">

						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Home</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
									<input type="text" name="home_phone" value=<?php echo $home_phone ;?> class="form-control" readonly>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Mobile</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input type="text" name="mobile_phone" value=<?php echo $mobile_phone; ?> class="form-control" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Tax No:</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
									<input type="text" name="tax_number" value=<?php echo $tax_number; ?> class="form-control" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Deed No:</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
									<input type="text" name="deed_number" value=<?php echo $deed_number; ?> class="form-control" readonly>
								</div>
							</div>
						</div>

						<br>

						<div class="form-group">
							
							<label class="col-sm-2 col-xs-12 control_label"><p>Meter ID</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<a href="../payment/html/client_payment.php?meter_id=<?php echo $meter_ID; ?>"><?php echo $meter_ID; ?></a>
									
								</div>
							</div>
						</div>
											

					</div>

					<div id="col2" style="width :50%; height: 100%; float: left">

						<div class="form-group">
							
							<label class="col-sm-2 col-xs-12 control_label"><p>NIC</p></label>
							<div class="col-sm-10 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
									<input type="text" name="nic" value=<?php echo $nic; ?> class="form-control" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							
							<label class="col-sm-2 col-xs-12 control_label"><p>Email</p></label>
							<div class="col-sm-10 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span>
									<input type="text" name="email" value=<?php echo $email; ?> class="form-control" readonly>
								</div>
							</div>
						</div>

						<div class="form-group">
							
							<label class="col-sm-4 col-xs-12 control_label"><p>Current</p></label>
							<?php echo $current_final; ?>
						</div>


						<div class="form-group">
							
							<label class="col-sm-4 col-xs-12 control_label"><p>Purpose</p></label>
							<?php echo $purpose_final; ?>
						</div>


					<br>
			</fieldset>
		</form>
	</div>

<?php require_once('../footer.php'); ?>

</body>
</html>

<?php mysqli_close($connection); ?>