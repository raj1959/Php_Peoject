<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raj";


$dbh = new mysqli($servername, $username, $password, $dbname);

if ($dbh->connect_error) {
die("<h2>Database Connection Failure : " . $conn->connect_error . "</h2><hr>");
} 
?>