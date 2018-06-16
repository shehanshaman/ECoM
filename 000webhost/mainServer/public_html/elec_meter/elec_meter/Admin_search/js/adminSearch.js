$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"adminFetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result_admin').html(data);
   }
  });
 }

 $('#search_text_admin').keyup(function(){
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
