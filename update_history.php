<?php
include "co.php";
session_start() ;
$type=$_SESSION['type'];
$loginid = $_SESSION['loginid'];
extract($_POST);
$sql=mysqli_query($con,"UPDATE `answers` set userans=0 where  $type='cat_id'") or die('Error');
$q=mysqli_query($con,"INSERT INTO history set loginid='$loginid'") or die('Error');
       if($q)
       {
        header('Location:viewquestion.php');
       }
?>