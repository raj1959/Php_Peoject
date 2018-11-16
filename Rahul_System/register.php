
 
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Student Registration From</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
	
		background: #63738a;
		background-image: url("http://www.mineks.com/images/pages/22935city_scape5b.jpg");	
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;

	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 530px;
		margin: 0 auto;
		padding: 20px 0;
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
    	margin-bottom: 15px;
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
	.signup-form input{
		color: black;
		font-weight: bolder;

	}

	.input-group-addon {
		border-color: #e1e1e1;
	}
	.signup-form .fa {
		font-size: 21px;
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
		font-size: 17px;
		
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
    <form action="admin/pages/addstudent.php" method="post">
		<h2>Register Student Here</h2>
		<hr>
        <div class="form-group">
        	<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<div class="row">
				
				<div class="col-xs-6"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
				
				<div class="col-xs-6"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>
			</div>       
			</div> 	
        </div>
        <div class="form-group">
        	<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope-open"></i></span>
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
       </div>
       
      <div class="form-group">
        	<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
            <select class="form-control" name="department" >
				<option value="" selected >-Select Semester-</option>
				
				<?php
				$sql = "SELECT * FROM department ORDER BY name";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                }
               } else {

                }
                 $con->close();
				 ?>
				
			</select>
        </div> 
    </div>

      



        
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
        </div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="text" class="form-control" name="category" placeholder="Semester" required="required">
        </div>
        </div>

        


        <div class="form-group">
        	<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="date" class="form-control" name="dob" placeholder="D.O.B" required="required">
        </div>
        </div> 



         <div class="form-group">
        	<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <input type="password" class="form-control" name="password" placeholder="password" required="required">
        </div>
        </div> 


		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                <textarea style="resize: none;" rows="2" class="form-control" placeholder="Enter address" name="address" required autocomplete="off"></textarea>
         </div>
     </div>

        
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-venus-double"></i></span>
            <select class="form-control" name="gender" required>
			<option value="">-SelectGender-</option>
			<option value="Male">Male</option>
			<option value="Female">Felame</option>
        </div> 
    </select>
</div>

             
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <input type="submit" name="signup" value="Register Now" type="submit" class="btn btn-success btn-lg btn-block"/>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="index.php">Sign in</a></div>
</div>
</body>
</html>                                                                

