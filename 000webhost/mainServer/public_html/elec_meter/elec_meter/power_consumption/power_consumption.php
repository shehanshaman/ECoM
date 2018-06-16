<?php session_start(); ?>

<!DOCTYPE html>

<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../Admin_search/css/admin_search.css" rel="stylesheet" />
  </head>

  <body>

    <?php require_once('../header.php'); ?>
  
    <h2 align="center">Power consumption</h2>

    <div style="overflow-y: scroll;  min-height: 600px; max-height: 600px;">

    <div class="row">
      <div class="col-sm-12" style="padding: 20px; margin-left: 40%;">
          <button class="btn btn-success" onclick="location.href='regional_consumption.php'" style=" width:300px;">Map </button>        
      </div>   
    </div>

    <!-- insert tab -->
    <div class="tab">
      <button class="tablinks" onclick="opentab(event, 'dayMap')">Last day</button>
      <button class="tablinks" onclick="opentab(event, 'weekMap')">Last week</button>
      <button class="tablinks" onclick="opentab(event, 'monthMap')">Last month</button>
    </div>
    <!-- end tab -->


    <!-- dat map tab -->
    <div  id="dayMap" class="tabcontent active" style="margin-top: 50px; ">
    <div class="container">

      <div class="row">

        <div class="col-sm-12">
          <div id="chart-container-day">

          </div>
        </div>

      </div>

    </div>
    </div>

    <!-- dat map tab -->
    <div id="weekMap" class="tabcontent" style="margin-top: 50px;">
    <div class="container">

      <div class="row">

        <div class="col-sm-12">
          <div id="chart-container-week">

          </div>
        </div>
        
 <!--       <div class="col-sm-6">
          <div id="chart-container-week-line">

          </div>
        </div> -->

      </div>

    </div>
    </div>

    <!-- meter list tab -->
    <div id="monthMap" class="tabcontent" style="margin-top: 50px;">
    <div class="container">

      <div class="row">

        <div class="col-sm-12">
          <div id="chart-container-month">

          </div>
        </div>

      </div>

    </div>
    </div>


    <script src="js/fusioncharts.js"></script>
    <script src="js/fusioncharts.charts.js"></script>
    <script src="js/themes/fusioncharts.theme.zune.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/app.js"></script>  
    <script src="js/dayapp.js"></script>
    <script src="js/weekapp.js"></script>
    <script src="js/monthapp.js"></script>    

    <script type="text/javascript">
      
      function opentab_map(evt, tabName) {

          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent_map");

          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }

          tablinks = document.getElementsByClassName("btn");

          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }

          document.getElementById(tabName).style.display = "block";
          evt.currentTarget.className += " active";

      }
    </script>  
    </div>
    <?php require_once('../footer.php'); ?> 

  </body>

</html> 

<!-- add js files that uses for search files and tab generate -->
<script src="js/tab.js"></script>

