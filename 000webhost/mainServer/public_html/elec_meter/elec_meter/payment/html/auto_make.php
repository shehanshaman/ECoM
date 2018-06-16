<?php 

	include("connection.php");

	$sum_peak = 0;
	$sum_day = 0;
	$sum_offpeak = 0;

	$query_meter = "select meter_id from reading_tb group by meter_id";
	$details_meter = mysqli_query($connection, $query_meter);

	while ($user = mysqli_fetch_assoc($details_meter)) {
	    
	    $query_email = "select * from client_tb where meter_id = {$user['meter_id']}";
	    $details_email = mysqli_query($connection, $query_email);
	    $email_q = mysqli_fetch_assoc($details_email);
	    $email = $email_q['email'];
	    
	    echo $email;

		$query_unit = "select * from reading_tb where meter_id = {$user['meter_id']}";
		$details_unit = mysqli_query($connection, $query_unit);

		while ($unit = mysqli_fetch_assoc($details_unit)) {

			//echo $user['time'];echo "<br>";
			list($date,$time) =  explode(' ', $unit['time']);
			if($time>="18:30:00" && $time<"22:30:00"){
				$sum_peak += $unit['usage'];
				//echo "peak<br>";
			}elseif ($time>="05:30:00" && $time<"18:30:00") {
				$sum_day += $unit['usage'];
				//echo "day<br>";
			}elseif ($time>="22:30:00" || $time<"05:30:00") {
				$sum_offpeak += $unit['usage'];
				//echo "offpeak<br>";
			}

		}

		$unit_charge = 0;
		$all_units = 0;
		$fixed_charge = 0;

		$query_type = "select bill_type from meter_tb where meter_id = {$user['meter_id']}";
		$details_type = mysqli_query($connection, $query_type);
		$meter_type = mysqli_fetch_assoc($details_type);

		if($meter_type['bill_type']==1){
			$all_units = $sum_peak + $sum_day + $sum_offpeak;
			if($all_units > 60){
				if($all_units <= 90){
					$unit_charge = 60 * 7.85 + ($all_units - 60) * 10;
					$fixed_charge = 90;
				}else if($all_units <=120){
					$unit_charge = 60 * 7.85 + 30*10 + ($all_units - 90) * 27.75;
					$fixed_charge = 480;
				}else if($all_units <=180){
					$unit_charge = 60 * 7.85 + 30*10 + 30*27.75 + ($all_units - 120) * 32;
					$fixed_charge = 480;
				}else{
					$unit_charge = 60 * 7.85 + 30*10 + 30*27.75 + 60*32 + ($all_units - 180) * 45;
					$fixed_charge = 540;
				}
			}else{
				if($all_units <= 30){
					$unit_charge = $all_units * 30;
					$fixed_charge = 30;
				}else{
					$unit_charge = 30*2.50 + ($all_units - 30) * 4.85;
					$fixed_charge = 60;
				}
			}
		}else if($meter_type['bill_type']==0){
			$unit_charge = $sum_peak * 54 + $sum_day * 25 + $sum_offpeak * 13;
			$fixed_charge = 540;
		}
/*
		echo "peak : {$sum_peak}<br>";
		echo "day : {$sum_day}<br>";
		echo "offpeak : {$sum_offpeak}<br>";
*/
		$query_add = "insert into bill_tb (peak,day,off_peak,unit_charges,fixed_charge,meter_id,month,paid_id) values ({$sum_peak},{$sum_day},{$sum_offpeak},{$unit_charge},{$fixed_charge},{$user['meter_id']},NOW(),0)";
		//echo $query_add;
		$result_set = mysqli_query($connection, $query_add);

		if($result_set){
			//echo "<br>Success<br>";
		}else{
			//echo "not sussess<br>";
		}

		$sum_peak = 0;
		$sum_day = 0;
		$sum_offpeak = 0;
		
		$query = "select balance,months_to_pay from current_balance_tb where meter_id = {$user['meter_id']} ORDER BY date DESC LIMIT 1" ;
		$last_balance = mysqli_query($connection, $query);
		$get = mysqli_fetch_assoc($last_balance);

		$balance = $get['balance'];
		$balance_pre = $get['balance'];
		$months_to_pay = $get['months_to_pay'];

		$amount = $unit_charge + $fixed_charge;
		$balance = $balance - $amount;

		if($balance<=0) $months_to_pay++;

		$query = "insert into current_balance_tb (meter_id,amount,balance,date,months_to_pay) values ('{$user['meter_id']}',-{$amount},{$balance},NOW(),{$months_to_pay})";
		//echo $query;
		$result = mysqli_query($connection, $query);

		if($result){
			echo "<br>success<br>";
			$view_email = "ECoM \n user ID : ".$user['meter_id']."\n Unit Charge : ".$unit_charge."\n Fixed Charge : ".$fixed_charge."\n Last Balance :".$balance_pre."\n \n Balance : ".$balance;
			echo $view_email;
			
			$admin_email = "noreply@ecom.lk";
			
			mail($email, "Electricity Consumption ", $view_email, "From:" .$admin_email );
			
			
		}else{
			echo "<br>not success<br>";
		}

	}

 ?>