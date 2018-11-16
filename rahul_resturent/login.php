<?php
session_start();

include 'db/db.php';

if(isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM user WHERE user = '" . $email. "' and pass = '" .$password . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user'] = $email;
		header("Location: welcom.php");
	} else {
		$errormsg = "Incorrect Email or Password!!!";
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
	<link href="Admin/lol.css" rel="stylesheet" type="text/css">
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


	</style>



</head>
<body>
<h2 style="text-align: center;">User Login</h2>

<div id="container">
  <div class="panel panel-default">
    <div class="panel-heading"><span class="r-circle"><i class="glyphicon glyphicon-globe"></i></span></div>
    <div class="panel-body">
      <form id="signin" role="form" method="post" action="">
        <label for="username">Username</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="username" type="text" class="form-control" name="username" value="" placeholder="username" style="height: 45px;">
        </div>
        <br>
        <label for="password">Password</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" value="" placeholder="password" style="height: 45px;">   
        </div>
        <br>
       <input type="submit"  name="login" value="Login" class="btn btn-success btn-lg" >
      </form>
    </div>
  </div>
</div>

</body>
</html>