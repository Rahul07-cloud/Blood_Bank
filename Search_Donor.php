<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php");?>
</head>
<body>
    
   
<?php
include("top_nav.php");
?>

    
    <div class="container-fluid"  style='margin-top:70px;'>
        
        <div class="row">
            <div class="col-lg-12">
			 <h3 class=" text-primary">
					<i class='fa fa-search'></i>   Search Donor Availability
                </h3><hr>
            </div>    
        </div>

			<?php  include("blood_bread.php"); ?>

		
       
		  
		  		<div class="row  centered-form ">
		    <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-search "> </span>  Search Donor Availability</h3>
                    </div>
                    <div class="panel-body">
					<form  name="frm" id="frm" >
						<div class="form-group">
							<label class="control-label text-primary">Search City</label>
								<select name="CITY"  id="CITY" required class="form-control input-sm">
									<option value="">Select</option>
									<option value="Bangalore">Bangalore</option>
									
								</select>
						</div>
						<div class="form-group">
							<label class="control-label text-primary">Required Blood Group</label>
								<select name="BLOOD" id="BLOOD" required  class="form-control input-sm">
							<option value="">Select</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>

								</select>
						</div>
						 <div class="form-group">
							<label class="control-label text-primary">Search Area</label>
							<select name="AREA" id="AREA" required class="form-control input-sm">
								<option value="">Select</option>
							<option value="Banashankari">Banashankari</option>
							<option value="Basavanagudi">Basavanagudi</option>
							<option value="Bannerghatta Road">Bannerghatta Road</option>
							<option value="Bellandur">Bellandur</option>
							<option value="BTM Layout">BTM Layout</option>
							<option value="Electronic City">Electronic City</option>
							<option value="Hebbal">Hebbal</option>
							<option value="HSR Layout">HSR Layout</option>
							<option value="Indiranagar">Indiranagar</option>
							<option value="Jayanagar">Jayanagar</option>
							<option value="Kammanahalli">Kammanahalli</option>
							<option value="Koramangala">Koramangala</option>
							<option value="KR Puram">KR Puram</option>
							<option value="Malleswaram">Malleswaram</option>
							<option value="Marathahalli">Marathahalli</option>
							<option value="M.G Road">M.G Road</option>
							<option value="Richmond Town">Richmond Town</option>
							<option value="Sarjapur">Sarjapur</option>
							<option value="Whitefield">Whitefield</option>
							<option value="Yelehanka">Yelehanka</option>
							</select>
						</div>
						
						
						 <div class="form-group">
							<button class="btn btn-primary" name="submit" type="button" id="submit"><i class='fa fa-search'></i> Search Donor</button>
						  </div>
						
                    </div>
                </div>
            </div>
			 <div class="col-xs-12 col-sm-12 col-md-6" id="feedback">
			 <p>
				Please fill the correct details and search your nearest donor. For more queries contact our admin.
			 </p>
			  </div>
			
			
			
            </div>
		  
           </div>


 <?php include("footer.php"); ?>

 <script>
	$(document).on('click','#submit',function(){
		
		$.ajax({
					url:"search_don.php",
					method:"POST",
					data:$("#frm").serialize(),
					success:function(data)
					{
						$("#feedback").html(data);
						
					}
				});
		
	});
 </script>
	
</body>
</html>