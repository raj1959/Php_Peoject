<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Upturn Smart Online Exam System by Mayuri <br> [Master in Computer Science]
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Upturn Smart Online Exam System" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<link rel="stylesheet" href="css/table-style.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<form action="#" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="email" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Sign In" name="login">
			</div>
			<div class="clearfix"></div>
		</form>
		        
				
				
	            
			   
					
			    <div class="footer">
					 <p>Upturn Smart Online Exam System by Mayuri <br> [Master in Computer Science]</p>

				</div>
	</div>
	</div>
	</div>
</body>
</html>

<?php
session_start();
include("connect.php");
if(!empty($_POST["login"])) {
	$result = mysql_query("SELECT * FROM studenttbl WHERE email='" . $_POST["email"] . "' and password = '".($_POST["password"])."'");
	$row  = mysql_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["studentid"] = $row['studid'];
	$_SESSION["email"] = $row['email'];
	$_SESSION["fname"] = $row['fname'];
	$_SESSION["lname"] = $row['lname'];
	$_SESSION["file"] = $row['file'];
	 header("Location:index.php");
	}
    
}
?>


