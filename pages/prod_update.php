<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
    $prod_qty =$_POST['qty'];
    
    
    $unitprice =$_POST['unitprice'];
	$cid =$_POST['cid'];
	
	
	mysqli_query($con,"UPDATE temp_refill set prod_qty='$prod_qty',unitprice='$unitprice' where temprefillid='$id'")or die(mysqli_error());
	
	
	echo "<script>document.location='prod_transaction.php?cid=$cid'</script>";  

	
?>
