


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
$sql=mysqli_query($con,"UPDATE `unv` SET status=0  where uid='$b'");

if ( $sql  ){
  echo  "<script>
      window.location='add_unv.php';</script>";
}
else {
	
}
?>
</body>
</html>