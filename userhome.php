<?php
session_start();
include 'uheader.html';
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
  


 <?php echo "<font size=5 color=blue>Welcome $type : $usr_name";?>

<div class="imgs">
<img src="study.jpg"  width="1400" height="500">
</div>
<h1></h1>




<h2><marquee>
 

</h2></marquee>


<div class="row">
  <!-- <div class="column">
    <img src="b.jpg" alt="imgs" style="width:100%">
  </div>
  <div class="column">
    <img src="b.png" alt="imgs" style="width:100%" >
  </div>
  <div class="column">
    <img src="st.jpg" alt="imgs" style="width:100%" >
  </div> -->
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