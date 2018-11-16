<?php
session_start();

include 'db/config.php';

if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM student WHERE user_id = '" . $email. "' and password = '" .$password . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $email;
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Invalid Details');</script>";
	}
}




?>