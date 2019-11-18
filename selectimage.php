<?php
include("co.php");
  
  session_start();

  $loginid=$_SESSION['loginid'];
$select="SELECT distinct * FROM `book`,`book2`,`book3`";
$res=mysqli_query($con,$select);

while($row=mysqli_fetch_array($res))
{
 ?>
 <center>
 <img src="<?php echo $row['tenfile'];?>">
 <!-- <img src="<?php echo $row['plusfile'];?>"> 
 <img src="<?php echo $row['ugfile'];?>">  --></center>
 
<?php }

?>