<?php 
include 'dbcon.php';
	$storageunitname = $_POST['storageunitname'];
	
	
	
		mysqli_query($con,"INSERT INTO storageunits(storageunitname) 
			VALUES('$storageunitname')")or die(mysqli_error($con));  
			
			echo "<script>window.location='storage.php'</script>";   
	


?>