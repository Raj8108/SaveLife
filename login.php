<?php
	include('config.php');
	session_start();
	if(isset($_POST['username']) || isset($_POST['password']) ){


	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = $connection->query("SELECT * FROM member WHERE username='$username' AND password='$password'");

	$fetch = $login->fetch_array();
	if($login->num_rows == 1){
		if ($fetch['usertype'] == 'user')  {
			$_SESSION['userid'] = $fetch['user_id'];
			$_SESSION['membername'] = $fetch['username'];
			header('location:user_inbox.php');
		}
	}else {
		$_SESSION['error'] = '';
	}
}
?>