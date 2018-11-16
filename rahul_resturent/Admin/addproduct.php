<?php
session_start();



include_once '../db/db.php';


//check if form is submitted
if (isset($_POST['add'])) {
    $id = mysqli_real_escape_string($con, $_POST['empcode']);
    $phone = mysqli_real_escape_string($con, $_POST['department']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $name = mysqli_real_escape_string($con, $_POST['firstName']);
    $lname = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

        if(mysqli_query($con, "INSERT INTO product (Product_ID,Category,Brand,Product_Name,Warranty,Price,Quantity) VALUES('" . $id . "', '" . $phone . "','" . $brand . "', '" . $name . "','" . $lname . "', '" . $email . "', '" . $password . "')")) {
            $successmsg = "Successfully Registered! ";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }


    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Add Employee</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet"> 
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.empcode{
    text-transform: uppercase;
}
.text-danger{
    color: red;
    font-size: 15px;
    border-left: 5px red;
    padding: 7px;
}
.text-good
{
color: green;
font-size: 15px;
border-left: 5px green;
padding: 7px;
}
        </style>



    </head>
    <body>
  <?php include('include/header.php');?>
            
       <?php include('include/sidebar.php');?>

   <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Add Product</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <form id="example-form" method="post" name="addemp">
                                    <div>
                                        <h3>Product Info</h3>
                                        <section>
                                            <div class="wizard-content">
                                                <div class="row">
                                                    <div class="col m6">
                                                        <div class="row">
                                                           
<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
<span class="text-good"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
 <div class="input-field col  s12">
<label for="empcode">Product Code(Must be unique)</label>
<input  name="empcode" id="empcode" onBlur="checkAvailabilityEmpid()" type="text" autocomplete="off" required>
<span id="empid-availability" style="font-size:12px;"></span> 
</div>


<div class="input-field col  s12">
<label for="firstName">Name</label>
<input id="firstName" name="firstName" type="text" required>
</div>



<div class="input-field col s12">
<label for="email">Price</label>
<input  name="email" type="text" id="text"  autocomplete="off" required>
<span id="emailid-availability" style="font-size:12px;"></span> 
</div>

<div class="input-field col s12">
<label for="password">Quantity</label>
<input id="password" name="password" type="text" autocomplete="off" required>
</div>

</div>
</div>
                                                    
                                                    

<div class="input-field col m6 s12">
<select  name="department" autocomplete="off">
<option value="">Category</option>

<?php 

$result = $con->query("SELECT  Category from category_table");
;
    while ($row = $result->fetch_assoc()) {

                  unset($category);
                  $category = $row['Category']; 
                  echo '<option value="'.$category.'">'.$category.'</option>';
                 
}
?>


</select>
</div>
<div class="input-field col m6 s12">
<select  name="brand" autocomplete="off">
<option value="">Brand</option>

<?php
$result = $con->query("SELECT  Brand from brand_table");

    while ($row = $result->fetch_assoc()) {

                  unset($brand);
                  $brand = $row['Brand']; 
                  echo '<option value="'.$brand.'">'.$brand.'</option>';
                 
}
?>
</select>
</div>

<div class="input-field col m6 s12">
<label for="lastName">Warranty</label>
<input id="lastName" name="lastName" type="text" autocomplete="off" required>
</div>




                                                        
<div class="input-field col s12">
<button type="submit" name="add" id="add" class="waves-effect waves-light btn indigo m-b-xs">ADD</button>

</div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                     
                                    
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/form_elements.js"></script>
        
    </body>
</html>
