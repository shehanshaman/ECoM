<?php 

	$peak_details = "";
	$day_details = "";
	$offpeak_details = "";
	$bill_details = "";
	$column_details = "";
	$meter_details = "";
	$alert = "";

	include("connection.php");

	if (isset($_GET['meter_id'])) {
		# code...
		$meter_id = mysqli_real_escape_string($connection, $_GET['meter_id']);

		$query = "select peak,day,off_peak,unit_charges,fixed_charge,MONTH(month),YEAR(month) from bill_tb where meter_id = {$meter_id} ORDER BY month DESC limit 5";
		$details = mysqli_query($connection, $query);
		

		while ($user = mysqli_fetch_assoc($details)) {
			$peak_details .= "<td>";
			$peak_details .= "{$user['peak']}";
			$peak_details .= "</td>";

			$day_details .= "<td>";
			$day_details .= "{$user['day']}";
			$day_details .= "</td>";

			$offpeak_details .= "<td>";
			$offpeak_details .= "{$user['off_peak']}";
			$offpeak_details .= "</td>";

			$column_details .= "<th scope='col'>";
			$column_details .= "{$user['YEAR(month)']}:{$user['MONTH(month)']}";
			$column_details .= "</th>";

			$bill_details .= "[ '{$user['YEAR(month)']}:{$user['MONTH(month)']} ', {$user['unit_charges']} + {$user['fixed_charge']} ],";
		}

		$bill_details = substr($bill_details, 0, -1);  // abcdef
		//echo $bill_details;

		$query = "select * from current_balance_tb,meter_tb where meter_tb.meter_id = current_balance_tb.meter_id ORDER BY date DESC limit 1";
		$details = mysqli_query($connection, $query);
		$user = mysqli_fetch_assoc($details);

		$meter_details .= "<tr><td>Meter ID</td><td>{$user['meter_id']}</td></tr>";
		$meter_details .= "<tr><td>Client ID</td><td>{$user['client_id']}</td></tr>";
		$meter_details .= "<tr><td>Balance</td><td>{$user['balance']}</td></tr>";

		$balance = -$user['balance'];
		if($balance>0){
			$alert .= "<div class='alert alert-warning show'>
  			<strong> Warning! </strong> You have to pay Rs ";
  			$alert .= "{$balance}";
			$alert .= ".</div>";
		}
		
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Clent Payment</title>
 	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/03.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../css/payment.css">
 </head>
 <body>

 	<?php echo $alert; ?>
 	

 	<div id="wrapper">
			<div class="chart">
				<h2>Last 5 month details</h2>
				<table id="data-table" border="1" cellpadding="10" cellspacing="0" summary="The effects of the zombie outbreak on the populations of endangered species from 2012 to 2016">
					<caption>Units in thousands</caption>
					<thead>
						<tr>
							<td>&nbsp;</td>
							<?php echo $column_details; ?>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Carbon peak</th>
							<?php echo $peak_details; ?>
						</tr>
						<tr>
							<th scope="row">Blue day</th>
							<?php echo $day_details; ?>
						</tr>
						<tr>
							<th scope="row">Tanned offpeak</th>
							<?php echo $offpeak_details; ?>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="note">
				<p>* Peak (18.30-22.30) , Day (5.30-18.30) , Off-peak (22.30-05.30)</p>
			</div>
		</div>
		<!-- JavaScript at the bottom for fast page loading -->
		


		<!-- Grab jQuery from Google -->
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
		
		<!-- Example JavaScript -->
		<script src="../js/client_view.js"></script>

		<div id="piechart"></div>
		<div class="details">
			<table class="table table-striped">
				<?php echo $meter_details ?>
			</table>
		</div>

		<script type="text/javascript" src="../js/loader.js"></script>

		<script type="text/javascript">
		// Load google charts
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		// Draw the chart and set the chart values
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([
		  ['Month', 'Bill'],
		 
		  <?php echo $bill_details; ?>
		]);

		  // Optional; add a title and set the width and height of the chart
		  var options = {'title':'Last 5 months bill', 'width':550, 'height':400};

		  // Display the chart inside the <div> element with id="piechart"
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}
		</script>
 </body>
 </html>