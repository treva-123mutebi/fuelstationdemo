<?php 
include 'dbcon.php';
	$pumpnumber = $_POST['pumpnumber'];
	
	
	
		mysqli_query($con,"INSERT INTO pumps(pumpnumber) 
			VALUES('$pumpnumber')")or die(mysqli_error($con));  
			
			echo "<script>window.location='pump.php'</script>";   
	


?>