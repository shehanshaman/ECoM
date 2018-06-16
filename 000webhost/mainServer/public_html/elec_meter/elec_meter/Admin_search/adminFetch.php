
<?php
$connect = mysqli_connect('localhost','id5778277_admin','admin','id5778277_mainserverdatabase');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM admin_tb 
  WHERE id LIKE '%".$search."%'
 ";
}
else
{
 $query = "SELECT * FROM admin_tb ORDER BY id";
}
$result = mysqli_query($connect, $query);
 
  if(mysqli_num_rows($result) > 0)
 
  {
   $output .= '
    <div class="table-responsive">
     <table class="table table bordered">
      <tr>
       <th>admin ID</th> 
       <th>admin Name</th>
       <th>user Type</th>
       <th>last Login</th>
      </tr>';

     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["user_type"].'</td>
        <td>'.$row["last_login"].'</td>
        <td><button type="button" name="action" id="'.$row["id"].'" onclick="clickedView(this.id)" class="btn btn-success">Delete</button></td>
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
  function clickedDelete(clickedId){
    //alert(clickedId);
   // location.href='../Forms/viewMeter.php';
  }

</script>