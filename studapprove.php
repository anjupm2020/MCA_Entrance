<?php
include "co.php";

$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE  reg SET approve=1  where loginid='$b'");

if ( $sql  ){
  echo  "<script>alert('approved');
      window.location='adminapp.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>