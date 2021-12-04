<?php
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
		
			<h3 class="text-primary"><i class="fa fa-bed"></i>  Need Blood</h3><hr> 
<div class="col-md-6 col-md-offset-3">
	
			
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
					
			<?php 
				$sql="Select * from blood_stock";
				load_stock($sql,$con);
			?>
			</div>
		</div>
		</div>
			<a href='admin_stock_update.php' class='btn btn-primary '>Update Stock</a>
	</div>

</div>
	 <?php include("admin_footer.php"); ?>

	</body>
</html>