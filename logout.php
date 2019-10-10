<?php
include 'co.php';
// Inialize session
session_start();
 $loginid=$_SESSION['loginid'];
// Delete certain session
unset($_SESSION['loginid']);
$result = mysqli_query($con,"UPDATE `login` SET  `status` =0 WHERE `loginid`='$loginid' ");
  $row  = mysqli_fetch_array($result);  
if ($result) {
	header('Location: login.php');
}


?>