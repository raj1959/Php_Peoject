<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>OES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Upturn Smart Online Exam System" />

</head> 
<body>

<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
<div class="mother-grid-inner">
<?php 


session_start();

if($_SESSION["studentid"]==true)
{

include("header.php");

include("checkstud.php");
include("connect.php");
 
if (isset($_SESSION['record_id'])) {
$record_id = $_SESSION['record_id'];


$sql = "SELECT * FROM assesmenttbl WHERE recordid = '$record_id' AND studid = '$my_id'";
//echo $sql;die;
$result = mysql_query($sql);

if ($result > 0) {
    
    while($row = mysql_fetch_assoc($result)) {
    $exam_name = $row['examname'];
	$score = $row['score'];
	$status = $row['status'];
	$next_retake = $row['nextretake'];
	$taking_date = $row['date'];
    }
} else {
    header("location:./");
}
mysql_close($con);
}else{
	
header("location:./");	
}

 ?>
 
 
<ol class="breadcrumb">
	            
                <center><li class="breadcrumb-item"><h4><a href="examination.php">Assessment Result</a></h4></li>
				<li><h4><?php echo $exam_name; ?></h4></li>
				</center>
          </ol><div class="row">
						   <div class="col-md-6 agileits-w3layouts">
                           <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><b>Results Information</b></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive project-stats">  
                                       <table class="table table-bordered">
									       <thead>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <th scope="row">1</th>
                                                   <td>Exam Name</td>
                                                   <td><?php echo $exam_name; ?></td>
                                               </tr>
											     <tr>
                                                   <th scope="row">2</th>
                                                   <td>Student_name</td>
                                                   <td><?php echo $my_fname." ".$my_lname; ?></td>
                                               </tr>
											    <tr>
                                                   <th scope="row">3</th>
                                                   <td>Score</td>
                                                   <td><?php echo $score; ?>%</td>
                                               </tr>

											   
											  <tr>
                                                   <th scope="row">4</th>
                                                   <td>Next Re-take</td>
                                                   <td><?php echo $next_retake;?></td>
                                               </tr>

                                              
                                           </tbody>
                                        </table>
                                    </div>
                                
                        </div> 
                        </div>
						 </div>
						 <div class="col-md-6 agileits-w3layouts">
                           <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><b>Status</b></h3>
                                </div>
                                <div class="panel-body">
                                <?php
								if ($status == "PASS") {
								print '
                                <div class="alert alert-success" role="alert">
                                        Well done! You have pass this examination.
                                    </div>';								
								}else{
																print '
                                <div class="alert alert-danger" role="alert">
                                       You have fail to pass this examination.
                                    </div>';		
									
								}
								
								?>
                                </div>
                            </div>
                        </div>
						
	
                   

                </div>
      </div>
                 
				
				<br>
			
            


<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); 

	?>
	
	<?php }
else
	header('location:login.php');
?>
	
	</div>
	
	<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

<script type="text/javascript">
var max_time = <?php echo $duration ?>;
var c_seconds  = 0;
var total_seconds =60*max_time;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
document.getElementById("quiz-time-left").innerHTML='' + max_time + ':' + c_seconds + 'Min';
function init(){
document.getElementById("quiz-time-left").innerHTML='' + max_time + ':' + c_seconds + ' Min';
setTimeout("CheckTime()",999);
}
function CheckTime(){
document.getElementById("quiz-time-left").innerHTML='' + max_time + ':' + c_seconds + ' Min' ;
if(total_seconds <=0){
setTimeout('document.quiz.submit()',1);
    
    } else
    {
total_seconds = total_seconds -1;
max_time = parseInt(total_seconds/60);
c_seconds = parseInt(total_seconds%60);
setTimeout("CheckTime()",999);
}

}
init();
</script>
<script>
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
</script>
</body>
</html>