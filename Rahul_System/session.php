<?php


// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "rahul_system");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['user_id'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT user_id from student where user_id = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['user_id'];
?>
