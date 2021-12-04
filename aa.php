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
<div class="container"  style='margin-top:70px' >
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bank"></i> Stock Update </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["submit"]))
				{
					$sql="SELECT * FROM stock WHERE stock_id='1'";
					$result=$con->query($sql);
					$row=$result->fetch_assoc();
					$a=$_POST["A+VE"]+$row["A+VE"];
					echo $a;
					$sql="UPDATE stock SET A+VE='{$a}' WHERE stock_id='1'";
					if($con->query($sql))
					{
						
						echo "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success : </strong> Status Updated Success.</div>";
					}
					else
					{
						echo "<div class='alert alert-error fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>error : </strong> Status Updated Success.</div>";
					}
					
					
					
				}
				
				?>

					<p id='out' class='text-success'></p>
					<form role="form" action="admin_stockupdate.php" method="post">
						<div class="form-group">
							<label class="control-label text-primary">A+ve</label>
							<input type="text" placeholder="A+ve" name="A+VE" id="A+VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">A-VE</label>
							<input type="text" placeholder="A-ve" name="A-VE" id="A-VE" class="form-control input-sm">
						</div>					<div class="form-group">
							<label class="control-label text-primary">B+VE</label>
							<input type="text" placeholder="B+ve" name="B+VE" id="B+VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">B-VE</label>
							<input type="text" placeholder="B-ve" name="B-VE" id="B-VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">AB+VE</label>
							<input type="text" placeholder="AB+ve" name="AB+VE" id="A+VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">AB-VE</label>
							<input type="text" placeholder="AB-ve" name="AB-VE" id="A+VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">O+VE</label>
							<input type="text" placeholder="O+ve" name="O+VE" id="A+VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">O-VE</label>
							<input type="text" placeholder="O-ve" name="O-VE" id="A+VE" class="form-control input-sm">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" id="BTN" name="submit"><i class="fa fa-send"></i> Update</button>
						  </div>
						
					</form>
				</div>

				<div class="col-md-6">
						
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  
	</body>
</html>