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
include("header.php"); ?>

	<ol class="breadcrumb">
	                  <center><li class="breadcrumb-item"><h4><a href = "http://www.upturnit.com/product.php" onclick = "getConfirm(this.href);">Results </a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="SELECT * FROM examtbl ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>Manage Results</h2>
<table width="100%" id="table">
<thead>
<tr>
              
			  <th align="left">Exam Name</th>
		      <th align="left">Category</th>
			  <th align="left">Subject</th>
              <th align="left">Date</th>
              <th align="left">Duration</th>
              <th align="left">Passmark</th>
			  <th align="left">RE Exam</th>
			  <th align="left">Status</th>
              <th align="left">Action</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	
	$status = $rows['status'];
	if ($status == 1) {
	  $st = '<p class="btn bg-success">ACTIVE</p>';
	  $stl = '<a href="pages/make_ex_in.php?id='.$rows['examid'].'">Make Inactive</a>';
	  }else{
	  $st = '<p class="btn bg-danger">INACTIVE</p>'; 
      $stl = '<a href="pages/make_ex_ac.php?id='.$rows['examid'].'">Make Active</a>';											   
    }
	
	?>

    <tr>
    <td><?php echo $rows['examname'];?></td>
    <td><?php echo $rows['catname'];?></td>
    <td><?php echo $rows['subname'];?></td>
    <td><?php echo $rows['deadline'];?></td>
	<td><?php echo $rows['duration'];?><b> min.</b></td>
	<td><?php echo $rows['percentage'];?><b>%</b></td>
	<td><?php echo $rows['reexam'];?><b> day(s)</b></td>
	<td><?php echo $st;?></td>
	
	<td>
    <ul  style="list-style: none;" >
          <li class="dropdown ">
		  
		  <button href="#" class="dropdown-toggle btn bg-primary" data-toggle="dropdown" aria-expanded="false">
			 select
		  </button>
		      <ul class="dropdown-menu drp-mnu">
		          <li> <a href = "http://www.upturnit.com/product.php" onclick = "getConfirm(this.href);"> View Results</a> </li> 
				  <li> <a href = "http://www.upturnit.com/product.php" onclick = "getConfirm(this.href);"> Short Summary</a> </li>
			      
			  </ul>
	      </li>
	</ul>
	</td>

    </tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
	
<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); ?>
	<?php }
else
	header('location:login.php');
?>
	</div>
</body>
<!--popup script start -->
<script type = "text/javascript">

function getConfirm(l)
{
  if(arguments[0] != null)
  {
    if(window.confirm('Get Full Source Code at reasonable cost  ' + l + '?\n'))
    {
      location.href = l;
    }
    
    else
    {
      event.cancelBubble = true;
      event.returnValue = false;
      return false;
    }
  }
  
  else
  {
    return false;
  }
  return;
}
</script>

	<!--popup script end -->
</html>