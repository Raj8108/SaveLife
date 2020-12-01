
<?php 
$sql="SELECT * FROM messages WHERE STATUS=1";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$mes='<span class="badge pull-right">'.$n.' Unread</span>';
}
else
{
	$mes="";
}
?>
<h3 class="text-primary"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>
<hr>

<ul class="nav nav-stacked">
	<li><a href="contact.php"><i class="fa fa-envelope fa-lg"></i> Contact US <?php echo $mes;?></a></li>
	<li><a href="request_blood.php"><i class="fa fa-search fa-lg"></i>Need Blood</a></li>
	<li><a href="Search_Donor.php"><i class="fa fa-users fa-lg text-success"></i> Search Blood</a></li>
	
	
</ul>

<hr>