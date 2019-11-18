<?php

  include "co.php";

  $m="admin";
  $p="Admin123";
  $psw=md5($p);
  $sq="INSERT INTO login (uname,pass,type) VALUES('$m','$psw','admin')";
  $qu=mysqli_query($con,$sq);
  if($qu)
  {
  	echo "Success";
  }
  else
  {
  	echo $con->error;
  }
?>
