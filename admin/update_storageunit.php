<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['stunit_id'];
	 $storageunitname = $_POST['storageunitname'];
	 
	
	 
	 mysqli_query($con,"UPDATE storageunits SET storageunitname='$storageunitname'  where stunit_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Storage Unit details!');</script>";
		echo "<script>document.location='storage.php'</script>";
	
} 

