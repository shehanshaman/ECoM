
<?php 
	require_once('functions.php');
	include("connection.php");

	$disconnect_id = "";
	$meter_id = "";
	$lost_time = "";
	$meter_type = "";
	$client_id = "";
	$location_lat = "";
	$location_lng = "";
	$comment_max = "";
	$comment_details = "";


	

	if (isset($_GET['disconnect_id'])) {
		# code...
		$disconnect_id = mysqli_real_escape_string($connection, $_GET['disconnect_id']);

		$query = "SELECT * from disconnect_tb where disconnect_id = {$disconnect_id}";
		$result_set = mysqli_query($connection, $query);

		//disconnect_tb
		if($result_set){

			if(mysqli_num_rows($result_set) == 1){
				//user found
				$result = mysqli_fetch_assoc($result_set);

				$disconnect_id =	$result['disconnect_id'];
				$meter_id = $result['meter_id'];
				$lost_time = $result['lost_time'];
			}
		}

		$query = "SELECT * from meter_tb where meter_id = {$meter_id}";
		$result_set = mysqli_query($connection, $query);

		if($result_set){

			if(mysqli_num_rows($result_set) == 1){
				//user found
				$result = mysqli_fetch_assoc($result_set);

				$meter_type =	$result['meter_type'];
				$client_id = $result['client_id'];
				$location_lat = $result['location_lat'];
				$location_lat = $result['location_lat'];
				$location_lng = $result['location_lng'];
			}
		}

		$query = "SELECT * from comment_tb where meter_id = {$meter_id} ORDER BY set_time DESC";
		$details = mysqli_query($connection, $query);

		if($details){
			while ($user = mysqli_fetch_assoc($details)) {
			    # code...
			    $comment_details .= "<tr>";
			    $comment_details .= "<td>{$user['comment_id']}</td>";
			    $comment_details .= "<td>{$user['comment']}</td>";
			    $comment_details .= "<td>{$user['set_time']}</td>";
			    $comment_details .= "</tr>";
		  	}
		}else{

		}
		  
		  
	}else{
		header("location:index.php");
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>More details</title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/more.css">
 </head>
 <body>
 	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Disconnect Map</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <!--<li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>-->
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="jumbotron heading">
    <h3>More Details of breakdown of electricity of meter :<?php echo $meter_id; ?></h3>
    <p></p>
  </div>

  <div class="col-sm-12 show">

  	<div class="basic col-sm-4">
  		<table class="table table-hover">
  			<tr>
  				<td>Disconnect id </td><td><?php echo $disconnect_id; ?></td>
  			</tr>
  			<tr>
  				<td>Power lost time</td><td><?php echo $lost_time; ?></td>
  			</tr>
			<tr>
  				<td>Meter Type </td><td><?php echo $meter_type; ?></td>
  			</tr>
  			<tr>
  				<td>Client id </td><td><?php echo $client_id; ?></td>
  			</tr>
  		</table>
  	</div>

  	<div class="col-sm-8">
  		<div class = "view_map" id="map" style="width:700px;height:500px;background:black"></div>

		<script>

	      function initMap() {
	        var myLatLng = {lat: <?php echo $location_lat; ?>, lng: <?php echo $location_lng; ?>};

	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 16,
	          center: myLatLng
	        });

	        var marker = new google.maps.Marker({
	          position: myLatLng,
	          map: map,
	          title: 'Hello World!'
	        });
	      }
    	</script>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi7y_WchESweYBb6yr9OepOTCkR-gJKyo&callback=initMap"></script>
  	</div>
  	
  	<div class="comment col-sm-12">
  		<h3>All comments</h3>
  		<table class="table table-striped">

        <tr>
          <th>Comment ID</th>
          <th>Comment</th>
          <th>Set time</th>
        </tr>

        <?php echo $comment_details; ?>
      </table>
  	</div>

  	<div class="add_comment col-sm-12">
  		<form action="add_comment.php" method="post">
  			<div class="form-group">
		      <label for="comment">Add Comment:</label>
		      <input type="hidden" name="add" value=<?php echo $disconnect_id; ?>>
		      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
		    </div>
		    <input type="submit" name="submit">
  		</form>
  	</div>

  </div>

</div>

 </body>
 </html>