<?php
include 'config1.php';

$departments = 0;
$students = 0;
$examination = 0;
$subjects = 0;
$categories = 0;
$notice = 0;
$questions = 0;
$banned_students = 0;
$std_fails = 0;
$std_pass = 0;

$sql = "SELECT * FROM brand_table";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $departments++;
    }
} else {

}

//$sql = "SELECT * FROM user WHERE role = 'student'";
$sql = "SELECT * FROM user ";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $students++;
    }
} else {

}


$sql = "SELECT * FROM category_table";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $examination++;
    }
} else {

}

$sql = "SELECT * FROM customer";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $subjects++;
    }
} else {

}

$sql = "SELECT * FROM department";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $categories++;
    }
} else {

}


$sql = "SELECT * FROM employees";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $notice++;
    }
} else {

}

$sql = "SELECT * FROM product";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $questions++;
    }
} else {

}

//$sql = "SELECT * FROM sales WHERE role = 'student' AND acc_stat = '0'";
$sql = "SELECT * FROM sales ";
$result = $dbh->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
     $banned_students++;
    }
} else {

}

//$sql = "SELECT * FROM tbl_assessment_records";
//$result = $dbh->query($sql);

//if ($result->num_rows > 0) {
   
 //   while($row = $result->fetch_assoc()) {
 //    $status = $row['status'];
//	 if ($status == "PASS"){
//		 $std_pass++;
//	 }else{
//		$std_fails++; 
//		 
//	 }
//	 
  //  }
//} else {

//}



$dbh->close();
?>