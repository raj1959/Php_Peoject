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

</head> 
<body>
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
<div class="mother-grid-inner">
<?php 


session_start();


if($_SESSION["userid"]==true)
{

include("header.php");

include("checkuser.php");
include("connect.php");

if (isset($_GET['eid'])) {
$exam_id = $_GET['eid'];
$sql = "SELECT * FROM examtbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {

    while($row = mysql_fetch_assoc($result)) {
     $excate = $row['catname'];
	 $exsubject = $row['subname'];
	 $exname = $row['examname'];
	 $exdate = $row['deadline'];
	 $exduration = $row['duration'];
	 $expassmark = $row['percentage'];
	 $exreex = $row['reexam'];
	 $exterms = $row['instruction'];
    }
} else {
    header("location:./");
}

$stdpass = 0;
$stdfail = 0;

$sql = "SELECT * FROM assesmenttbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result)) {
   
    while($row = mysql_fetch_assoc($result)) {
     $status = $row['status'];
	 if ($status == "PASS"){
		 $stdpass++;
	 }else{
		$stdfail++; 
		 
	 }
	 
    }
} else {

}
mysql_close($con);	
}else{
	header("location:./");
}
 

?>

	<ol class="breadcrumb">
	            
                <center><li class="breadcrumb-item"><h4><a href="">Results Summary </a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    

<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
      <div class="grid_3 grid_5 ">
      <h3>Results Summary - <?php echo "$exname"; ?> </h3>
				<div class="col-md-6 agileits-w3layouts">
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><b>Title</b></th>
								<th><b>Information</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Exam Name</td>
								<td><span class=" "><?php echo "$exname"; ?></span></td>
							</tr>
							<tr>
								<td>Subject</td>
								<td><span class=""><?php echo "$exsubject"; ?> </span></td>
							</tr>
							<tr>
								<td>Deadline</td>
								<td><span class=""><?php echo "$exdate"; ?></span></td>
							</tr>
							<tr>
								<td>Duration</td>
								<td><span class=""><?php echo "$exduration"; ?> <b>min.</b></span></td>
							</tr>
							<tr>
								<td>Passmark</td>
								<td><span><?php echo "$expassmark"; ?><b>%</b></span></td>
							</tr>
							
								
							
						</tbody>
					</table>                    
				</div>
				
				<div class="col-md-6 agileits-w3layouts">
				<table class="table table-bordered">
						<thead>
							<tr>
								<th><center><b>Passed Students</b></center></th>
								<th><center><b>Failed Students</b></center></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><center><?php echo "$stdpass"; ?></center></td>
								<td><center><?php echo "$stdfail"; ?></center></td>
							</tr>
						</tbody>
				</table>   
				
				</div>
			
				
            <div class="clearfix"> </div>
			
            </div>
			
			   

</div>
</div>
</div>


<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); 

	?>
	<?php }
else
	header('location:login.php');
?>
	</div>
	
	
</body>
</html>