<?php 
include 'dbcon.php';
	$shift_details = $_POST['shift_details'];
	
	
	
		mysqli_query($con,"INSERT INTO shifts(shift_details) 
			VALUES('$shift_details')")or die(mysqli_error($con));  
			
			echo "<script>window.location='shifts.php'</script>";   
	


?>