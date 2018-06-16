<?php session_start(); ?>

<?php 
  
  include("connection.php");

  $query = "select disconnect_tb.disconnect_id,meter_tb.meter_id,disconnect_tb.lost_time,meter_tb.meter_type,meter_tb.client_id,client_tb.address,meter_tb.location_lat,meter_tb.location_lng 
   from disconnect_tb,meter_tb,client_tb 
  where disconnect_tb.meter_id = meter_tb.meter_id AND meter_tb.client_id = client_tb.client_id AND disconnect_tb.meter_id in (select meter_id from meter_tb where connectivity =0) ORDER BY disconnect_tb.lost_time DESC";

  $details = mysqli_query($connection, $query);
  $disconnect_details = "";
  $map_location = "";
  $map_location .= "[";
  while ($user = mysqli_fetch_assoc($details)) {
    # code...
    $disconnect_details .= "<tr>";
    $disconnect_details .= "<td>{$user['disconnect_id']}</td>";
    $disconnect_details .= "<td>{$user['meter_id']}</td>";
    $disconnect_details .= "<td>{$user['client_id']}</td>";
    $disconnect_details .= "<td>{$user['meter_type']}</td>";
    $disconnect_details .= "<td>{$user['lost_time']}</td>";
    $disconnect_details .= "<td><a href=\"more_details.php?disconnect_id={$user['disconnect_id']}\">More</a></td>";
    $disconnect_details .= "</tr>";

    $map_location .= "[";
    $map_location .= "{$user['disconnect_id']},{$user['location_lat']},{$user['location_lng']}";
    $map_location .= "],";
  }
  $map_location = substr($map_location, 0, -1);  // abcdef
  $map_location .= "]";
  //echo $map_location;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

  <?php require_once('../../header.php'); ?>
  
<div class="container" >
  <div class="jumbotron heading">
    <h3>Details of breakdown of electricity</h3>
    <p></p>
  </div>
  <div class="details col-sm-12"  style="overflow-y: scroll;  min-height: 484px; max-height: 484px;">
    <div class="names col-sm-6">
      <h3>Details</h3>
      <table class="table table-striped">

        <tr>
          <th>Dosconnect-Id</th>
          <th>Meter-Id</th>
          <th>Client-Id</th>
          <th>Type</th>
          <th>Lost-time</th>
          <th>More details</th>
        </tr>

        <?php echo $disconnect_details; ?>
      </table>
    </div>
    <div class="map col-sm-6"> 

      <div id="map" style="height: 500px; width: 540px;">
      </div>
      <script type="text/javascript">
        function initMap() {
          var locations = <?php echo $map_location; ?>;

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7.5,
            center: new google.maps.LatLng(7.823023, 80.655453),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });

          var infowindow = new google.maps.InfoWindow();

          var marker, i;

          for (i = 0; i < locations.length; i++) { 
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(locations[i][1], locations[i][2]),
              map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
              }
            })(marker, i));
          }
        }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi7y_WchESweYBb6yr9OepOTCkR-gJKyo&callback=initMap"></script>

    </div>
  </div>
</div>
  <?php require_once('../../footer.php'); ?>
  <p></p>
</div>
</body>
</html>
