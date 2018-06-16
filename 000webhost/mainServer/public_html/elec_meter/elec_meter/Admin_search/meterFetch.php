
<?php
$connect = mysqli_connect('localhost','id5778277_admin','admin','id5778277_mainserverdatabase');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM meter_tb 
  WHERE meter_id LIKE '%".$search."%'
 ";
}
else
{
 $query = "SELECT * FROM meter_tb ORDER BY meter_id";
}
$result = mysqli_query($connect, $query);
 
  if(mysqli_num_rows($result) > 0)
 
  {
   $output .= '
    <div class="table-responsive">
     <table class="table table bordered">
      <tr>
       <th>meter ID</th> 
       <th>start Date</th>
       <th>password</th>
       <th>connectivity</th>
      </tr>';

     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td>'.$row["meter_id"].'</td>
        <td>'.$row["start_date"].'</td>
        <td>'.$row["password"].'</td>
        <td>'.$row["connectivity"].'</td>
        <td><button type="button" name="action" id="'.$row["meter_id"].'" onclick="clickedViewMeter(this.id)" class="btn btn-success">View</button></td>
       </tr>
      ';
     }
   echo $output;
 
  }
 
  else
  {
   echo 'Data Not Found';
  }

?>

<script type="text/javascript">
  function clickedViewMeter(clickedId){
    //alert(clickedId);
    location.href='../Forms/viewMeter.php';
  }

</script>