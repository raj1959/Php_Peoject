<?php
session_start();

if(isset($_SESSION['user_id'])) {
	header("Location: pndex.php");
}

include_once 'db/config.php';
include 'include/unique.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$student_id = 'SAN-'.get_rand_numbers(3).'-'.get_rand_numbers(3).'';

	$fname = ucwords(mysqli_real_escape_string($con, $_POST['fname']));
	$lname = ucwords(mysqli_real_escape_string($con, $_POST['lname']));
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	$department = mysqli_real_escape_string($con, $_POST['department']);
	$category = mysqli_real_escape_string($con, $_POST['category']);
	$address = ucwords(mysqli_real_escape_string($con, $_POST['address']));
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$password = md5(mysqli_real_escape_string($con, $_POST['password']));

	
	
	if (!$error) {
		$sql = "INSERT INTO student (user_id, fname, lname, gender, dob, address, email, phone, department, category, password)
			VALUES ('$student_id', '$fname', '$lname', '$gender', '$dob', '$address', '$email', '$phone', '$department', '$category','$password')";
		if(mysqli_query($con, $sql)) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	}

/*
		$to  = $email;
        $subject = 'Your Data';
        $message_body = '
        Hello '.$first_name.',


        Thank you for signing up!

        Here Is your all Details:
        Userid.'.$student_id.',
        department'.$department.',
        Semester '.$$category.',

        \n \n

        Thanks
        Rahul System

        '

        mail( $to, $subject, $message_body );

        header("location: profile.php");
        */
}

?>