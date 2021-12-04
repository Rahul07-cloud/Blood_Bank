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
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add Camp </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["camp_submit"]))
				{
					$sql="INSERT INTO camp(TITLE,PLACE,CAMP_DATE) VALUES ('".$_POST["camptitle"]."','".$_POST["Place"]."','".$_POST["CDATE"]."')";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_camp.php" method="post">
						<div class="form-group text-primary">
							<label for="camptitle">Camp Title</label>
							<input id="camptitle" required type="text" class="form-control" name="camptitle">
						</div>
						<div class="form-group text-primary">
							<label for="Place">Place</label>
							<input id="Place" required type="text" class="form-control" name="Place">
						</div>
						<div class="form-group">
							<label class="control-label text-primary">Date</label>
							<input type="text" required placeholder="MM/DD/YYYY" class="form-control input-sm DATES" name="CDATE" id="CDATE">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='camp_submit' value="Add Camp">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="SELECT * FROM camp ORDER BY CAMP_ID LIMIT 0,5 ";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>Camp Title</th>
											<th>Place</th>
											<th>Date</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["TITLE"]."</td>";
												echo "<td>".$row["PLACE"]."</td>";
												echo "<td>".$row["CAMP_DATE"]."</td>";
												echo "<td><a href='admin_del_camp.php?id=".$row["CAMP_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					
					<a href='admin_view_camp.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  
	</body>
</html>