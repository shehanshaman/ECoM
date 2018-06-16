<?php session_start();

if(isset($_SESSION['user_name'])){

}
else{
	header('Location: admin_search.php');
}

?>



<!DOCTYPE html>

<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/admin_search.css" rel="stylesheet" />

    <style type="text/css">
      .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
      }
    </style>

  </head>

  <body>

    <?php require_once('../header.php'); ?>


        <h2 align="center">Search</h2>


        <!-- insert tab -->
        <div class="tab">
          <button class="tablinks" onclick="opentab(event, 'clientList')">Client List</button>
          <button class="tablinks" onclick="opentab(event, 'adminList')">Admin List</button>
          <button class="tablinks" onclick="opentab(event, 'meterList')">Meter List</button>
        </div>
        <!-- end tab -->
        
  
    <div style="overflow-y: scroll; min-height: 560px; max-height: 560px;">

        <!-- client list tab -->
        <div id="clientList" class="tabcontent">
            <div class="container">
              
              <h2 align="center">Client List</h2><br />

              <div class="form-group">
                  <div class="input-group">
                   <span class="input-group-addon">Search</span>
                   <input type="text" name="search_text" id="search_text" placeholder="Enter Client Name" class="form-control" />
                  </div>
                  <br>
                  <div><button type="button" id="newClient" class="btn btn-success" onclick="location.href='../Forms/AddClient.php'">Add New Client</button></td></div>
              </div>
                 <br>
              <div id="result_client"></div>
            </div>
        </div>

        <!-- admin list tab -->
        <div id="adminList" class="tabcontent">
            <div class="container">
              
              <h2 align="center">Admin List</h2><br />
     <div><button type="button" id="newClient" class="btn btn-success" onclick="location.href='../Forms/addAdmin.php'">Add New Admin</button></td></div><br>
                <div class="form-group">
                  <div class="input-group">
                   <span class="input-group-addon">Search</span>
                   <input type="text" name="search_text" id="search_text_admin" placeholder="Enter Admin User Name" class="form-control" />
                  </div> 
                </div>
                 <br>
                <div id="result_admin"></div>
            </div>
        </div>

        <!-- meter list tab -->
        <div id="meterList" class="tabcontent">
            <div class="container">
              
              <h2 align="center">Meter List</h2><br />

                <div class="form-group">
                  <div class="input-group">
                   <span class="input-group-addon">Search</span>
                   <input type="text" name="search_text" id="search_text_meter" placeholder="Enter meter ID" class="form-control" />
                </div>
                  
              </div>
                 <br>
              <div id="result_meter"></div>
            </div>
        </div>
    </div>    
    <?php require_once('../footer.php'); ?>

  </body>

</html> 

<!-- add js files that uses for search files and tab generate -->
<script src="js/tab.js"></script>
<script src="js/adminSearch.js"></script> 
<script src="js/clientSearch.js"></script>    
<script src="js/meterSearch.js"></script>
