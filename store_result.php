<?php
include('co.php') ;
extract($_POST);
session_start() ;
$qq = $_SESSION['q'];
$loginid = $_SESSION['loginid'];
$type = $_SESSION['type'];


 // $sql="INSERT INTO `answers`( `qno`, `userans`, `loginid`, `cat_id` ) VALUES ( '$qno', '$userans', '$loginid', '$type')";
 $sql="UPDATE `answers` set `userans`='$userans',`loginid`='$loginid' where qno='$qno'";
$run=mysqli_query($con,$sql);
if($run)
{
++$qq;
$_SESSION['q']=$qq;
header('location:viewquestion.php');
}
?>
