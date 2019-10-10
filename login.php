<?php
include 'co.php';
session_start();

include 'headers.html';
$message="";
if(!empty($_POST["login"]))
 {
  $result = mysqli_query($con,"SELECT * FROM `login` WHERE uname='" . $_POST['uname'] . "' and pass = '". $_POST['pass']."'");
  $row  = mysqli_fetch_array($result);
  if(is_array($row))
   {
  $_SESSION["loginid"] = $row['loginid'];

  $uname=$row['uname'];
    $pass=$row['pass'];
    $type=$row['type'];

   } 
$loginid=$_SESSION['loginid'];
 $result = mysqli_query($con,"UPDATE `login` SET  `status` =1 WHERE `loginid`='$loginid' ");
  $row  = mysqli_fetch_array($result);  
   if ($type=='S') {
    header("location: userhome.php");
   }
  else if ($_POST['uname']=='admin' && $_POST['pass']=='admin') {
  header("location: adminhome.php");
     }
   else 
   {
     header("location: staffhome.php");
   }
  


  

}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

</head>



<body>
<center>


<div class="frm">
<div class="container">
<form name="myform" action="login1.php" 
 onsubmit="return validateform()" method="post">
  <fieldset >
<legend><h2><font color="white">LOGIN</font></h2></legend><br>

<font size="3" color="white">
    <div class="row">
      <div class="col-25">
        <label for="fname">Username:</label>
      </div>
      <div class="col-75">
        <input type="text"  name="uname" placeholder="username.." >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password"> Password:</label>
      </div>
      <div class="col-75">
        <input type="password"  name="pass" placeholder="password">
      </div>
    </div><br><br>
 
    <div class="row">
     <center><input type="submit" value="LOGIN" name="login"></center><br>
    </div>
    
    
</fieldset>
  </form>
</center>
</font>  

</body>
</html>
<?php
include 'footer.html';
?>


