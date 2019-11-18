


<?php
include "co.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>

<?php

$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE   cat SET status=0  where cat_id='$b'");

if ( $sql  ){
  echo  "<script>
      window.location='add_cat.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>
</body>
</html>