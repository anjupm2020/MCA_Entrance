<?php
session_start();
include 'sheader.html';
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['name'];
$id=$_SESSION['loginid'];
if($login)
{
  ?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="link.css">

</head>





<body>
  


 <?php echo "<font size=5 color=blue>Welcome teacher : $usr_name";?>

<div class="imgs">
<img src="place.jpg"  width="1400" height="500">
</div>
<h1></h1>




<h2><marquee>
 

</h2></marquee>


<div class="row">
  
</div>


</body>
</html>

<?php
}
else
header("location:login.php");
?>
<?php
include 'footer.html';
?>