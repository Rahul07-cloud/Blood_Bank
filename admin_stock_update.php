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
				$sql="SELECT * FROM blood_stock WHERE id=1";
				$result=$con->query($sql);											
				if($result->num_rows>0)
				{
					$row=$result->fetch_assoc();
					$a=$_POST["A+VE"]+$row["A+VE"];
					$b=$_POST["A-VE"]+$row["A-VE"];
					$c=$_POST["B+VE"]+$row["B+VE"];
					$d=$_POST["B-VE"]+$row["B-VE"];
					$e=$_POST["AB+VE"]+$row["AB+VE"];
					$f=$_POST["AB-VE"]+$row["AB-VE"];
					$g=$_POST["O+VE"]+$row["O+VE"];
					$h=$_POST["O-VE"]+$row["O-VE"];
					if($a<0)
					{
						$a=0;
					}
					if($b<0)
					{
						$b=0;
					}
					if($c<0)
					{
						$c=0;
					}
					if($d<0)
					{
						$d=0;
					}
					if($e<0)
					{
						$e=0;
					}
					if($f<0)
					{
						$f=0;
					}
					if($g<0)
					{
						$g=0;
					}
					if($h<0)
					{
						$h=0;
					}
					$sql="UPDATE `blood_stock` SET `A+VE` = '$a', `A-VE` = '$b', `B+VE` = '$c', `B-VE` = '$d', `AB+VE` = '$e', `AB-VE` = '$f', `O+VE` = '$g', `O-VE` = '$h' WHERE `blood_stock`.`id` = 1";
					if($con->query($sql))
						{
							echo "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success : </strong>stock updated</div>";
						}
					else
						{
							echo "<div class='alert alert-danger fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error : </strong>Server busy.Try again later.</div>";
						}
				}						
			}
							
				?>

					<?php if(isset($s)){echo $s;}?>
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_stock_update.php" method="post">
						<div class="form-group">
							<label class="control-label text-primary">A+ve</label>
							<input type="text" placeholder="A+ve" name="A+VE" id="A+VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">A-VE</label>
							<input type="text" placeholder="A-ve" name="A-VE" id="A-VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">B+VE</label>
							<input type="text" placeholder="B+ve" name="B+VE" id="B+VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">B-VE</label>
							<input type="text" placeholder="B-ve" name="B-VE" id="B-VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">AB+VE</label>
							<input type="text" placeholder="AB+ve" name="AB+VE" id="A+VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">AB-VE</label>
							<input type="text" placeholder="AB-ve" name="AB-VE" id="A+VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">O+VE</label>
							<input type="text" placeholder="O+ve" name="O+VE" id="A+VE" class="form-control input-sm" required>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">O-VE</label>
							<input type="text" placeholder="O-ve" name="O-VE" id="A+VE" class="form-control input-sm" required>
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