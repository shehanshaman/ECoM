<?php session_start(); ?>

<!-- client search doing hear -->

<?php

	$output = null;

      $output .= '<button type="button" name="action" id="'.$_SESSION['user_id'].'" onclick="clickedView(this.id)" class="btn btn-success">Client Dedtails</button>';

   echo $output;

?>


<script type="text/javascript">

  //redirect to client details view page
  function clickedView(clickedId){
    
    var ID = clickedId;
    //alert(ID);
    var ref = 'Forms/viewClient.php?client_id=' + clickedId   ;
    location.href=ref;
  }

</script>
