<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['shift_id'];
	 $shift_details = $_POST['shift_details'];
	 
	
	 
	 mysqli_query($con,"UPDATE shifts SET shift_details='$shift_details'  where shift_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Shift details!');</script>";
		echo "<script>document.location='shifts.php'</script>";
	
} 

