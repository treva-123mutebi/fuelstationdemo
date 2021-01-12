<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../dist/includes/dbcon.php');

	$cid = $_POST['cid'];
    $name = $_POST['storageunitname'];
    $unitprice = $_POST['unitprice'];
    $prod_name = $_POST['stationprod_name'];
	
    
	$qty = $_POST['qty'];
		
			
		$query=mysqli_query($con,"select stunit_id from storageunits where stunit_id='$name'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);

		$query2=mysqli_query($con,"select prod_id from stationproducts  where prod_id='$prod_name'")or die(mysqli_error());
		$row2=mysqli_fetch_array($query2);
		//$price=$row['prod_price'];
		
		$query1=mysqli_query($con,"select * from temp_refill where prod_id='$prod_name' and branch_id='$branch'")or die(mysqli_error());
		$count=mysqli_num_rows($query1);
		
		$total=$unitprice*$qty;
		
		if ($count>0){
			mysqli_query($con,"update temp_refill set prod_qty=prod_qty+'$qty' where prod_id='$prod_name'")or die(mysqli_error());
	
		}
		else{
			mysqli_query($con,"INSERT INTO temp_refill(stunit_id,prod_qty,unitprice,prod_id,supplier_id,branch_id) VALUES('$name','$qty','$unitprice','$prod_name','$cid','$branch')")or die(mysqli_error($con));
		}

	
		echo "<script>document.location='prod_transaction.php?cid=$cid'</script>";  
	
?>