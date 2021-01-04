<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['prod_id'];
	 $stationprod_name = $_POST['stationprod_name'];
	 
	
	 
	 mysqli_query($con,"UPDATE stationproducts SET stationprod_name='$stationprod_name'  where prod_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Station Product details!');</script>";
		echo "<script>document.location='stationproducts.php'</script>";
	
} 

