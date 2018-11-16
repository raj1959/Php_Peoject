<?php
session_start();

include '../db/db.php';

if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM login WHERE User = '" . $email. "' and Pass = '" .$password . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['User'] = $email;
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Invalid Details');</script>";
	}
}




?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>Rahul Resturaent</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="lol.css" rel="stylesheet" type="text/css">
	<link href="../css/linecons.css" rel="stylesheet" type="text/css">
	<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="../css/responsive.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" type="text/css">

	<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		body {
			  background: #BD65F0;
			  /* fallback for old browsers */
			  background: -webkit-linear-gradient(to right, #BD65F0, #65C7F7, #BD65F0);
			  /* Chrome 10-25, Safari 5.1-6 */
			  background: linear-gradient(to right, #BD65F0, #65C7F7, #BD65F0);
			  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}



.btn{
	background-color: #BD65F0;
	width: 200px;
	text-align: center;
}
h2{
	padding: 40px;
	margin-top: 80px;
	font-size: 40px;
	text-shadow: 4px 20px 25px 20px #BD65F0;
}
a{
	float: left;
	margin-top: -30px;
	background: #65C7F7;
	padding: 16px;
	font-weight: bolder;
	font-size: 22px;
	color: black;
	border:5px  #BD65F0;
	border-radius: 8px;

}
a:hover{
	list-style: none;
	text-decoration: none;

}
.text-danger{
	font-size: 20px;
	color: white;
	font-weight: bolder;
}
.container{
    margin-top: 150px;
}

	</style>



</head>
<body>



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Admin Login</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="username" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" id="n" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	




</body>
</html>