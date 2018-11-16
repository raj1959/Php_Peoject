<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "rahul_system");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT email, password from login where username=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['email'] = $username; // Initializing Session
          header("location: welcome.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Login System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		background-image: url("http://www.mineks.com/images/pages/22935city_scape5b.jpg");
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 500px;
		margin: 0 auto;
		padding: 20px 0;
		margin-top: 10%;
	}

	.signup-form h2{
		color: #636363;
        margin: 0 0 10px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: -20;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 20px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 30px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 20px;
    }
	.signup-form .form-group{
		margin-bottom: 10px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 2px;
	}
	.signup-form input{
		color: black;
		font-weight: bolder;

	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}

	.input-group-addon {
		border-color: #e1e1e1;
	}
	.signup-form .fa {
		font-size: 21px;
		color: green;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}

	@media only screen and (max-width: 600px) {
    .signup-form{
		width: 450px;
		margin: 0 auto;
		padding: 20px 0;
		margin-top: 30%;

	}
	body{
		color: #fff;
		background-image: url("https://blog.ipleaders.in/wp-content/uploads/2017/05/iPleaders-12.jpg");
		font-family: 'Roboto', sans-serif;
	}
	.signup-form .text-center {
		color: black;
		font-weight: bolder;
		margin-top: 20px;
		
	}
	.signup-form input{
		color: black;
		font-weight: bolder;

	}
	
	}
</style>
</head>
<body>
<div class="signup-form">
    <form action="login.php" method="post">
		<h2>Login System</h2>
		<p class="hint-text">To Enter in Rahul System</p>
        <div class="form-group">
        	<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
        	<input type="text" class="form-control" name="username" placeholder="UserName or Email Id" required="required">
        </div>
       </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        </div>
        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" >  <a href="#">Remember Me</a></label>
		</div>
		<div class="form-group">
            <input type="submit" name="login1" value="Login"  class="btn btn-success btn-lg btn-block" />
        </div>
        <div class="form-group">
			<div class="text-center"><h4>Don't Have an account? <a href="register.php">Register Here</a></h4></div>
		</div>
		<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		<span class="text-danger"><?php if (isset($success)) { echo $success; } ?></span>
    </form>
    

</div>
</body>
</html>                                                                

