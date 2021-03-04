<?php
	//Start session
	session_start();
	include 'connection.php';

	if(isset($_POST["login"])){
	//Input Validations
	$login = $_POST['username'];
	$password = $_POST['pass'];	
	//Create query
	$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$login' AND pass='$password'");
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			$_SESSION['SESS_PRO_PIC'] = $member['username'];
			session_write_close();
			header("location: index.php");
			exit();
		}else {
			//Login failed
			header("location: login.php");
			exit();
		}
	}else {
		die("Query failed");
	}
}
?>
