 <?php
include('co.php');
session_start();
$loginid =$_SESSION['loginid'];
$sql = "SELECT * FROM `reg` WHERE loginid='$loginid'" ;
$run=mysqli_query($con,$sql);
if (mysqli_num_rows($run)==0)
{
echo 'you are not registered for any event';
}
else
{
$_SESSION['q']=1;
?>  
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>select</title>
 </head>
 <style>
 h1
 {
 margin-left:350px;
 margin-top:100px;
 }
 h2
 {
 margin-left:450px;
 margin-top:50px;
 }
 .two
 {
 margin-left:550px;
 margin-top:50px;
 }
 select{
    
    background:#0033FF;
    color:#FF6600;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
option:not(:checked) { 
    background-color: white; 
    color:#000;
}
 </style>
<body bgcolor="#99FFFF">


		<button  onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
<div class="one">
<h1>WELCOME TO BITZFLARE 2K18</h1>
<h2>Take Your Knowledge</h2>
</div>

 <div class="two">
 <form action="set_type.php" method="post">
  <?php
  $type='2';
  ?>
  <!-- <?php
 // if($_SESSION['msg']==1)
  {
  ?>
  <h3>You  have already done</h3>
    <?php
 //   $_SESSION['msg']=0;
  }
  ?> -->

  <br><br>
  <button type="submit" name="submit" value="submit">Take the test</button> 
  </center>
  </form> <?php } ?>
  </div>
</body>
</html>
