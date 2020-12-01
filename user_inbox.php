<?php
session_start();
include("config.php");
if(isset($_SESSION['usertype']))
 {
	 header("location:user_inbox.php");
 }
 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("user_head.php");?>
	</head>
	<body>

<?php include("user_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("user_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class="text-primary"><i class="fa fa-envelope"></i> Search for Blood </h3><hr>    
		
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  />
  <script>
$(document).ready(function(){
 load_data();
 function load_data(query)
 {
  $.ajax({
   url:"add.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search').keyup(function(){
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
</script>
</head>
<body>
<div class="container-fluid">       
  <div class="content-wrapper">
    
  <div class="wall">
    <section class="content">
	      <div class="box box-default">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
        <div class="row">
        <div class="col-xs-12">
        <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
        <div id="result"></div>
        </div>
	</div>	
        </div>
        </div>
        </section>
   </div>
 </div>
 </div>
 </body>
 </html>
   

	 <?php include("user_footer.php"); ?>
	</body>
</html>