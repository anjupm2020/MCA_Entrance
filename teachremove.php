<?php
include "co.php";

$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE  reg SET approve=0  where loginid='$b'");

if ( $sql  ){
  echo  "<script>alert('Removed');
      window.location='trapprove1.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>