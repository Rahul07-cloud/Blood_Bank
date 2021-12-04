<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM camp WHERE CAMP_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('Camp Deleted');
		window.open('admin_camp.php','_self');
	</script>";
}
?>