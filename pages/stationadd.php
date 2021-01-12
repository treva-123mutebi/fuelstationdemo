<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../dist/includes/dbcon.php');

	$cid = $_POST['cid'];
    $pumpnumber = $_POST['pumpnumber'];
    $shift_details = $_POST['shift_details'];
    $openmeterreading = $_POST['openmeterreading'];
    $closemeterreading = $_POST['closemeterreading'];
    
    
    $unitprice = $_POST['unitprice'];
    $date = date("Y-m-d H:i:s");
    $stationprod_name = $_POST['stationprod_name'];
	
    
	$quantitysold = $_POST['quantitysold'];
	$totalsales=$unitprice*$quantitysold;
		
			
		$query=mysqli_query($con,"select pumpid from pumps where pumpid='$pumpnumber'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);

		$query2=mysqli_query($con,"select shift_id from shifts  where shift_id='$shift_details'")or die(mysqli_error());
		$row2=mysqli_fetch_array($query2);
		//$price=$row['prod_price'];
		
		$query3=mysqli_query($con,"select prod_id from stationproducts  where prod_id='$stationprod_name'")or die(mysqli_error());
		$row3=mysqli_fetch_array($query3);
		//$price=$row['prod_price'];
		
		$query1=mysqli_query($con,"select * from salesdemoview where pumpid='$pumpnumber' and branch_id='$branch'")or die(mysqli_error());
		$count=mysqli_num_rows($query1);
		
		
		
		
			mysqli_query($con,"INSERT INTO salesdemoview(pumpid,shift_id,prod_id,openmeterreading,closemeterreading,unitprice,quantitysold,date,branch_id,totalsales) VALUES('$pumpnumber','$shift_details','$stationprod_name','$openmeterreading','$closemeterreading','$unitprice','$quantitysold','$date','$branch','$totalsales')")or die(mysqli_error($con));
		
	
		echo "<script>document.location='salesview.php'</script>";  
	
?>