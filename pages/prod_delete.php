<?php
include("../dist/includes/dbcon.php");
$id = $_REQUEST['id'];
$cid = $_POST['cid'];
$result=mysqli_query($con,"DELETE FROM temp_refill WHERE temprefillid ='$id'")
	or die(mysqli_error());
	
echo "<script>document.location='prod_transaction.php?cid=$cid'</script>";  
?>