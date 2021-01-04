<?php 
include 'dbcon.php';
	$stationprod_name = $_POST['stationprod_name'];
	
	
	
		mysqli_query($con,"INSERT INTO stationproducts(stationprod_name) 
			VALUES('$stationprod_name')")or die(mysqli_error($con));  
			
			echo "<script>window.location='stationproducts.php'</script>";   
	


?>