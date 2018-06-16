<!-- client search doing hear -->

<?php
$connect = mysqli_connect('localhost','id5778277_admin','admin','id5778277_mainserverdatabase');
//$connect = mysqli_connect( 'localhost' , 'root' , '' , 'regional_database');
$output = '';

  if(isset($_POST["query"]))
  {
   $search = mysqli_real_escape_string($connect, $_POST["query"]);
   $query = "
    SELECT * FROM client_tb 
    WHERE (first_name LIKE '%".$search."%'
    OR address LIKE '%".$search."%') 
    AND is_delete != 1 
   ";
  }
  else
  {
   $query = "SELECT * FROM client_tb WHERE is_delete != 1 ORDER BY client_id";
  } 

  $result = mysqli_query($connect, $query);
 
  if(mysqli_num_rows($result) > 0)
 
  {
   $output .= '
    <div class="table-responsive">
     <table class="table table bordered">
      <tr>
       <th>Client ID</th> 
       <th>Client Name</th>
       <th>Phone Number</th>
       <th>Address</th>
      </tr>';

     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td>'.$row["client_id"].'</td>
        <td>'.$row["first_name"].' '.$row["last_name"].'</td>
        <td>'.$row["mobile_phone"].'</td>
        <td>'.$row["address"].'</td>
        <td><button type="button" name="action" id="'.$row["client_id"].'" onclick="clickedView(this.id)" class="btn btn-success">View</button></td>
        <td><button type="button" name="action" id="'.$row["client_id"].'" onclick="clickedEdit(this.id)" class="btn btn-warning">Edit</button></td>
        <td><button type="button" name="action" id="'.$row["client_id"].'" onclick="clickedDelete(this.id)" class="btn btn-danger">Delete</button></td>
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

  //redirect to client details view page
  function clickedView(clickedId){
    
    var ID = clickedId;
    //alert(ID);
    var ref = '../Forms/viewClient.php?client_id=' + clickedId   ;
    location.href=ref;
  }

  //redirect to client edit page
  function clickedEdit(clickedId){
    var ID = clickedId;
    //alert(ID);
    var ref = '../Forms/editClient.php?client_id=' + clickedId   ;
    location.href=ref;
  }  

  //delete from database specific client
  function clickedDelete(clickedId){
    var str1 = clickedId;
    var str2 = "../Forms/deleteClient.php?client_id=";
    var str3 = str2.concat(str1);

    location.href=str3;
  } 
</script>