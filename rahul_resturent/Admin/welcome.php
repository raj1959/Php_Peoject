<?php
session_start();
include('include/config.php');
?>


   <!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Admin | Dashboard</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="../assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="../assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">

        	
        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            
            .counter {
                font-size: 30px;
                font-weight: bolder;
                color: white;
            }
            
        </style>
    </head>
    <body>
        <?php include('include/header.php');?>
            
       <?php include('include/sidebar.php');?>


            <main class="mn-inner">
                <h4 style="text-transform: uppercase;">Welcome <?php echo $_SESSION['User']; ?></h4>
                
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card" style="background-color: #BD65F0">
                            <div class="card-content">
                            
                                <span class="card-title" style="color: white; font-size: 22px;">Total Brand</span>
                              <span class="stats-counter">
<?php
$sql = "SELECT Brand_ID from brand_table";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$empcount=$query->rowCount();
?>

                                    <span class="counter"><?php echo htmlentities($empcount);?></span></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                        <div class="col s12 m12 l4">
                        <div class="card stats-card" style="background-color: #BD65F0" >
                            <div class="card-content">
                            
                                <span class="card-title" style="color: white; font-size: 22px;">Listed Employee </span>
<?php
$sql = "SELECT ID from employees";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$dpcount=$query->rowCount();
?>                           
                                <span class="stats-counter" ><span class="counter"><?php echo htmlentities($dpcount);?></span></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>

                     <div class="col s12 m12 l4">
                        <div class="card stats-card" style="background-color: #BD65F0">
                            <div class="card-content">
                            
                                <span class="card-title" style="color: white; font-size: 22px;">Listed Product </span>
   <?php
$sql = "SELECT Product_ID from product";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$dptcount=$query->rowCount();
?>                            
                                <span class="stats-counter"><span class="counter"><?php echo htmlentities($dptcount);?></span></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>


                    


                    <div class="col s12 m12 l4">
                        <div class="card stats-card" style="background-color: #BD65F0">
                            <div class="card-content">
                            
                                <span class="card-title" style="color: white; font-size: 21px;">Listed Customer </span>
   <?php
$sql = "SELECT * from customer";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$dpttcount=$query->rowCount();
?>                            
                                <span class="stats-counter"><span class="counter"><?php echo htmlentities($dpttcount);?></span></span>
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l4">
                        <div class="card stats-card" style="background-color: #BD65F0">
                            <div class="card-content">
                                <span class="card-title" style="color: white; font-size: 22px;">Listed Category</span>
<?php
$sql = "SELECT Category_id from  category_table";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$leavtypcount=$query->rowCount();
?>   
                                <span class="stats-counter"><span class="counter"><?php echo htmlentities($leavtypcount);?></span></span>
                      
                            </div>
                            <div class="progress stats-card-progress">
                                <div class="determinate" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>


                </div>
       <div class="row no-m-t no-m-b">
                        <div class="col s12 m12 l12">
                            <div class="card invoices-card">
                                <div class="card-content">
                                 
                                    <span class="card-title">Latest Leave Applications</span>
                             <table id="example" class="display responsive-table ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width="200">Employe Name</th>
                                            <th width="120">Leave Type</th>

                                             <th width="180">Posting Date</th>                 
                                            <th>Status</th>
                                            <th align="center">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>

 
          <td>
           <td><a href="leave-details.php?leaveid=<?php echo htmlentities($result->lid);?>" class="waves-effect waves-light btn blue m-b-xs"  > View Details</a></td>
 
                                    </tr>
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </main>
          
        </div>

        
        
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
        <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/plugins/chart.js/chart.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="../assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/plugins/curvedlines/curvedLines.js"></script>
        <script src="../assets/plugins/peity/jquery.peity.min.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        <script src="../assets/js/pages/dashboard.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        




      
      
   </body>
   
</html>
