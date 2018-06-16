<?php session_start(); ?>
<?php require_once('../inc/connection.php'); ?>
<?php require_once('../encript/encription.php'); ?>
<?php 

	if(isset($_POST['Submit'])){
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$addr_line1 = $_POST['address_line1'];
		$addr_line2 = $_POST['address_line2'];
		$addr_line3 = $_POST['address_line3'];
		$home_phone = $_POST['home_phone'];
		$mobile_phone = $_POST['mobile_phone'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$tax_number = $_POST['tax_number'];
		$deed_number = $_POST['deed_number'];
		$current = $_POST['current'];
		$purpose = $_POST['purpose'];
		$meter_ID = $_POST['meter_ID'];
		$is_delete = 0;
		$province_id = $_POST['province_id'];

		$address = $addr_line1 ." " .$addr_line2 ." " .$addr_line3;
		
		$psd = rand(0,10000);
		$pswd = encript($psd);
        $view_email = "Your ECoM Login Password is " .$psd;
			$admin_email = "noreply@ecom.lk";
			
			mail($email, "Client Login Password ", $view_email, "From:" .$admin_email );

		//client table
		$query = "INSERT INTO client_tb (first_name,last_name,address,home_phone,mobile_phone,NIC,email,tax_number,deed_no,current,purpose,meter_id,is_delete,password) VALUES ('{$first_name}','{$last_name}','{$address}','{$home_phone}','{$mobile_phone}','{$nic}','{$email}','{$tax_number}','{$deed_number}','{$current}','{$purpose}',{$meter_ID},{$is_delete},'{$pswd}')";

		$result = mysqli_query($connection,$query);

		if($result){

			//get client_id
			$queryNew = "SELECT * FROM client_tb WHERE meter_id = {$meter_ID} ";

			$result = mysqli_query($connection,$queryNew);

			//$new_meter = array();		
			$meter_id = "";
			$client_id = "";
			$password = "";

			while($row = mysqli_fetch_assoc($result)){

			/*	$new_meter[] = array(
					'meter_id' => $row["meter_id"],
					'client_id' => $row["client_id"],
					'password' => "Gihan123"
				);*/
				$meter_id = $row["meter_id"];
				$client_id = $row["client_id"];
				$password = "9999";

				//add to meter table
				$queryToMeter = "INSERT INTO meter_tb(meter_id,client_id,password,meter_type,Pro_id) VALUES ('".$row["meter_id"]."','".$row["client_id"]."','$password','".$row["purpose"]."','{$province_id}')";
				mysqli_query($connection,$queryToMeter);

				//$queryToAddProvince = "INSERT INTO provincemap_tb(meter_id,province_id) VALUES ('".$row["meter_id"]."','$province_id')";

			}

				$queryToAddProvince = "INSERT INTO `provincemap_tb` (`meter_id`, `province_id`) VALUES ('$meter_id','$province_id')";

				mysqli_query($connection,$queryToAddProvince);

			header("Location: https://geethpriyanka1994.000webhostapp.com/elec_meter/elec_meter/provincialReq/getnewMeters.php?meter_id=$meter_id&client_id=$client_id&password=$password");
			header("Location:../Admin_search/admin_search.php");
			//echo "successfully added";
		}else{
		    echo $query;
			echo "Error";
		}

	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add client</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>


    <?php require_once('../header.php'); ?>
	
	<div class="container" style="overflow-y: scroll; min-height: 680px; max-height: 680px;">
		<form action="AddClient.php" class="well form-horizontal" method="post" id="contact-form">
			<fieldset>
				<legend><p class="text-center"><i class="glyphicon glyphicon-plus"></i>Add Client</p></legend>

					<!--First Name-->

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"><mark>Full Name</mark></p></label>

						<label class="col-sm-2 col-xs-12 control_label"><p>First Name</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="first_name" placeholder="Enter First Name here" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"></p></label>
						
						<label class="col-sm-2 col-xs-12 control_label"><p>Last Name</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="last_name" placeholder="Enter Last Name here" class="form-control">
							</div>
						</div>
					</div>
					

					<br>

					<!--Address-->

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"><mark>Address</mark></p></label>
						<label class="col-sm-2 col-xs-12 control_label"><p>line 1</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="address_line1" placeholder="Address line 1 here" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"></p></label>
						<label class="col-sm-2 col-xs-12 control_label"><p>line 2</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="address_line2" placeholder="Address line 2 here" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control_label"><p class="text-center"></p></label>
						<label class="col-sm-2 col-xs-12 control_label"><p>line 3</p></label>
						<div class="col-sm-8 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" name="address_line3" placeholder="Address line 3 here" class="form-control">
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
									<input type="text" name="home_phone" placeholder="Home phone number" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Mobile</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
									<input type="text" name="mobile_phone" placeholder="Mobile phone number" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Tax No:</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
									<input type="text" name="tax_number" placeholder="TAX number" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 col-xs-12 control_label"><p>Deed No:</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
									<input type="text" name="deed_number" placeholder="Deed number" class="form-control">
								</div>
							</div>
						</div>

						<br>

						<div class="form-group">
							
							<label class="col-sm-2 col-xs-12 control_label"><p>Meter ID</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
									<input type="text" name="meter_ID" placeholder="Enter Meter ID here" class="form-control">
								</div>
							</div>
						</div>
											
						<div class="form-group">
							
							<label class="col-sm-2 col-xs-12 control_label"><p>Province</p></label>
							<div class="col-sm-9 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-flag"></i></span>
									<input type="text" name="province_id" placeholder="Enter Province here" class="form-control">
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
									<input type="text" name="nic" placeholder="National Identity Card Number" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							
							<label class="col-sm-2 col-xs-12 control_label"><p>Email</p></label>
							<div class="col-sm-10 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span>
									<input type="text" name="email" placeholder="Email" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							
							<label class="col-sm-4 col-xs-12 control_label"><p>Current</p></label>
							<label class="radio-inline"><input type="radio" name="current" value="15">15 A</label>
							<label class="radio-inline"><input type="radio" name="current" value="30">30 A</label>
							<label class="radio-inline"><input type="radio" name="current" value="60">60 A</label>
						</div>


						<div class="form-group">
							
							<label class="col-sm-4 col-xs-12 control_label"><p>Purpose</p></label>
							<label class="radio-inline"><input type="radio" name="purpose" value="Domestic">Domestic</label>
							<label class="radio-inline"><input type="radio" name="purpose" value="Merchant">Merchant</label>
							<label class="radio-inline"><input type="radio" name="purpose" value="Industry">Industry</label>
							<label class="radio-inline"><input type="radio" name="purpose" value="Other">Other</label>
						</div>

						
					<br>

					<!--Submit button-->
					
					<div class="form-group">
						<label class="col-md-2 control_label"></label>
						<div class="col-sm-12 col-sm-offset-2">
							<div class="input-group">
								<button name="Submit" style="height:50px; width: 300px" type="Submit" class="btn btn-primary">Confirm & add client</button>
							</div>
						</div>
					</div>
				

			</fieldset>
		</form>
	</div>


    <?php require_once('../footer.php'); ?>

</body>
</html>

<?php mysqli_close($connection); ?>