<?php
session_start();
include("config.php");
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
<div class="container"  style='margin-top:70px'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bed"></i> Stock Update </h3><hr>    
		<div class="row">
		<?php 
		
			if(isset($_POST["submit"]))
			{
				$id=$_GET['id'];
				$a=$_POST["A+VE"];
				$a=$_POST["A-VE"];
				$a=$_POST["B+VE"];
				$a=$_POST["B-VE"];
				$a=$_POST["AB+VE"];
				$a=$_POST["AB-VE"];
				$a=$_POST["O+VE"];
				$a=$_POST["O-VE"];
			$sql="UPDATE request_blood SET A+VE='{$a}',A-VE='{$a}',B+VE='{$a}',B-VE='{$a}',AB+VE='{$a}',AB-VE='{$a}',O+VE='{$a}',O-VE='{$a}', WHERE stock_id='{$id}'";
				if($con->query($sql))
				{
					
					$s= "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success : </strong> Status Updated Success.</div>";
				}
			}
			?>
		
			<?php 
				$sql="Select * from stock";
				load_stock($sql,$con);
			?>
		<div class="col-md-6">
		<h3 class='text-primary'>Any Updation</h3>
		<hr>
		<?php if(isset($s)){echo $s;}?>
		<form method='post' action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET["id"];?>">
			<div class="form-group">
				<label for="A+VE">A+VE</label>
				<input type="text" name="A+VE"  id="A+VE" class="form-control">
			</div>
			<div class="form-group">
				<label for="A-VE">A-VE</label>
				<input type="text" name="A-VE"  id="A-VE" class="form-control">
			</div>			<div class="form-group">
				<label for="B+VE">B+VE</label>
				<input type="text" name="B+VE"  id="B+VE" class="form-control">
			</div>			<div class="form-group">
				<label for="B-VE">B-VE</label>
				<input type="text" name="B-VE"  id="B-VE" class="form-control">
			</div>			<div class="form-group">
				<label for="AB+VE">AB+VE</label>
				<input type="text" name="AB+VE"  id="AB+VE" class="form-control">
			</div>			<div class="form-group">
				<label for="AB-VE">AB-VE</label>
				<input type="text" name="AB-VE"  id="AB-VE" class="form-control">
			</div>			<div class="form-group">
				<label for="O+VE">O+VE</label>
				<input type="text" name="O+VE"  id="O+VE" class="form-control">
			</div>			<div class="form-group">
				<label for="O-VE">O-VE</label>
				<input type="text" name="O-VE"  id="O-VE" class="form-control">
			</div>			
			<button type='submit' class='btn btn-success ' name='submit'><i class='fa fa-edit'></i> Update Now</button>
			<a href='admin_need_blood.php' class='btn btn-primary '>Back Page</a>
		</form>
		</div>
		
		</div>
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  

	</body>
</html>
