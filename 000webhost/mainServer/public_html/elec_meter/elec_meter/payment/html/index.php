<?php session_start(); ?>
<?php 
	  include("connection.php");

	$query = "select current_balance_tb.meter_id,meter_tb.client_id,current_balance_tb.balance,current_balance_tb.date,current_balance_tb.months_to_pay from current_balance_tb,meter_tb where current_balance_tb.balance<0 AND current_balance_tb.meter_id = meter_tb.meter_id";

	$balance_details = "";
	$details = mysqli_query($connection, $query);

 	while ($user = mysqli_fetch_assoc($details)) {
	 
	    $balance_details .= "<tr>";
	    $balance_details .= "<td>{$user['meter_id']}</td>";
	    $balance_details .= "<td>{$user['client_id']}</td>";
	    $balance_details .= "<td>{$user['balance']}</td>";
	    $balance_details .= "<td>{$user['date']}</td>";
	    $balance_details .= "<td>{$user['months_to_pay']}</td>";
	    //$balance_details .= "<td><a href=\"more_details.php?disconnect_id={$user['disconnect_id']}\">More</a></td>";
	    $balance_details .= "</tr>";
	}

	$today_month = date('m');
	$today_year = date('Y');
	//echo $today_year."<br>";
	//echo $today_month."<br>";
	$sum = array(0,0,0,0,0);
	$view_month = array(0,0,0,0,0);
	$view_year = array(0,0,0,0,0);

	$mmonth = $today_month;
	$myear = $today_year;

	for($i=0;$i<5;$i++){

		if($mmonth==1) {
			//echo "hello";
			$view_month[$i] = 12;
			$mmonth = 12;
			$myear = $today_year-1;
			$view_year[$i] = $myear;
		}else {
			$mmonth = $mmonth - 1;
			$view_month[$i] = $mmonth;
			$view_year[$i] = $myear;
		}
		$query = "select * from current_balance_tb where MONTH(date) = {$mmonth} AND YEAR(date) = {$myear}";
		//echo $query."<br>";
		$details = mysqli_query($connection, $query);

	 	while ($user = mysqli_fetch_assoc($details)) {
	 		if($user['amount'] > 0){
	 			$sum[$i] += $user['amount'];
	 		}
	 	}

	 	//echo $sum[$i]."<br>";
	}
	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="../css/bootstrap.min.css">
  	<script src="../js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/03.css">
	<link rel="stylesheet" type="text/css" href="../css/payment.css">
</head>
<body>

	<?php require_once('../../header.php'); ?>
<div>
	<div class="container">
		<table class="table table-striped">

        <tr>
          <th>Meter ID</th>
          <th>Clent ID</th>
          <th>Balance</th>
          <th>Date</th>
          <th>Months to pay</th>
          <!-- <th>More details</th> -->
        </tr>

        <?php echo $balance_details; ?>
      </table>
	</div>

	<div class="toggles">
			<p><a href="#" id="reset-graph-button">Reset graph</a>
			</p>
		</div>
		<div id="revenue">
			<div class="chart">
				<h2>Revenue of last 5 months</h2>
				<table id="data-table" border="1" cellpadding="10" cellspacing="0" summary="The effects of the zombie outbreak on the populations of endangered species from 2012 to 2016">
					<caption></caption>
					<thead>
						<tr>
							<td>&nbsp;</td>
							<th scope="col"><?php echo $view_year[0].":".$view_month[0]; ?></th>
							<th scope="col"><?php echo $view_year[1].":".$view_month[1]; ?></th>
							<th scope="col"><?php echo $view_year[2].":".$view_month[2]; ?></th>
							<th scope="col"><?php echo $view_year[3].":".$view_month[3]; ?></th>
							<th scope="col"><?php echo $view_year[4].":".$view_month[4]; ?></th>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<th scope="row">Blue Monkey</th>
							<td><?php echo $sum[0]; ?></td>
							<td><?php echo $sum[1]; ?></td>
							<td><?php echo $sum[2]; ?></td>
							<td><?php echo $sum[3]; ?></td>
							<td><?php echo $sum[4]; ?></td>
						</tr>
						
					</tbody>
				</table>
			</div>
			<div>
				<?php require_once('../../footer.php'); ?>			
			</div>
		</div>
		
</div>	


		<!-- JavaScript at the bottom for fast page loading -->
		
		<!-- Grab jQuery from Google -->
		<script src="../js/jquery.min.js"></script>
		
		<!-- Example JavaScript -->
		<script src="../js/03.js"></script>
</body>
</html>

