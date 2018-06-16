$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"meterFetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result_meter').html(data);
   }
  });
 }

 $('#search_text_meter').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });

});
