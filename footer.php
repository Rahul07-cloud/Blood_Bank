<html>
<body> 
<head><title></title></head>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {

	$(".DATES").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date().getFullYear()
 }).val();
	});
</script>
 <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
</div>
</div>
</div>
</body>
</html>

