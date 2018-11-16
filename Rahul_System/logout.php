<?php
session_start();
$_SESSION['password'] = false;
session_destroy();
header("location: index.php");

?>