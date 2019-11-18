<?php
include("co.php");
  
  session_start();

  $loginid=$_SESSION['loginid'];
$select="SELECT distinct * FROM `teacher` where loginid='$loginid'";
$res=mysqli_query($con,$select);

while($row=mysqli_fetch_array($res))
{
 ?>
 <center>
 <img src="<?php echo $row['file'];?>">
 </center>
 
<?php }

?>