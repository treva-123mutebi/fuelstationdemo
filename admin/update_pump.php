<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['pumpid'];
	 $pumpnumber = $_POST['pumpnumber'];
	 
	
	 
	 mysqli_query($con,"UPDATE pumps SET pumpnumber='$pumpnumber'  where pumpid='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Pump details!');</script>";
		echo "<script>document.location='pump.php'</script>";
	
} 

