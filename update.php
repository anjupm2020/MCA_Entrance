<?php
include "co.php";

$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE   center SET status=0  where cen_id='$b'");

if ( $sql  ){
  echo  "<script>alert('Removed');
      window.location='add_center.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>