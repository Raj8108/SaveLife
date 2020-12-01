<?php 

$server = "sql104.epizy.com";
$username = "epiz_27352527";
$password ="twYwhKE7f5";
$dbname "epiz_27352527_blood_bank";


$conn = mysqli_connect($server,$username,$password,$dbname);
if($conn)
{
	die( "Database Connection Failed:".mysqli_connect_error());
}

?>