<?php
date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';
$student_id = 'S'.get_rand_numbers(3).'-'.get_rand_numbers(3).'-'.get_rand_numbers(3).'';
$fname = ucwords(mysqli_real_escape_string($conn, $_POST['fname']));
$lname = ucwords(mysqli_real_escape_string($conn, $_POST['lname']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$department = mysqli_real_escape_string($conn, $_POST['department']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);

$sql = "SELECT * FROM tbl_users WHERE email = '$email' OR phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
	$sph = $row['phone'];
	if ($sem == $email) {
	 header("location:../students.php?rp=1189");	
	}else{
	
	if ($sph == $phone) {
	 header("location:../students.php?rp=2074");	
	}else{
		
	}
	
	}
	
    }
} else {

$sql = "INSERT INTO tbl_users (user_id, first_name, last_name, gender, dob, address, email, phone, department, category)
VALUES ('$student_id', '$fname', '$lname', '$gender', '$dob', '$address', '$email', '$phone', '$department', '$category')";

if ($conn->query($sql) === TRUE) {
  header("location:../students.php?rp=6310");
} else {
  header("location:../students.php?rp=9157");
}


}


$conn->close();
?>
<!--
<?php

//if (isset($_GET['sid'])) {
//	include '../database/config.php';
//	$student_id = mysqli_real_escape_string($conn, $_GET['sid']);
//	$sql = "SELECT * FROM tbl_users WHERE user_id = '$student_id'";
//$result = $conn->query($sql);

//if ($result->num_rows > 0) {

 //   while($row = $result->fetch_assoc()) {
//	$sdfname = $row['first_name'];
//	$sdlname = $row['last_name'];
//	$sdemail = $row['email'];
//	$sdphone = $row['phone'];
   // }

//      $to = 'rajr97555@gmail.com';
//     $subject = 'Contact Form Submit';
 //     $messag="Hello Mr.".$sdfname." ".$sdlname." \n \n \n".
//      "Your Contact Details is below".
//      "Student Id :".$student_id."\n"."Phone :".$sdphone."\n"."Email :".$sdemail."\n"."\n\n".$message;

 //     $headers="From: ".$name;
 //     if (mail($to, $subject, $messag,$headers)){
 //         header("location:../students.php?rp=6310");
//      }
 //     else{
//      	echo "error";
 //     }

//}
?> -->