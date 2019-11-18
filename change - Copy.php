<?php
include 'co.php';
session_start();
include 'headers.html';
$loginid = $_SESSION['loginid'];
?>

<html>
<head>

<style type="text/css">
  
  input,[type=password]{
  width: 20%;
  padding: 12px;
  border: 1px solid black;
  border-radius: 4px;
  
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
</style>
<script src="ps.js"></script>
</head>

  <body>
<center>

<div class="one">
  <h1>Change Password</h1>
    <form action="" method="post">
    <label for="pass">Current Password:
      
    </label>
    <input type="password" name="pass" id="pass" /><br><br>
    <label for="pass">New Password:
      
    </label>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="npwd" id="password" /><br><br>
<label for="pass">Confirm Password:
      
    </label>
<input type="password" name="cpwd" id="confirm_password" /><br><br>
<input type="submit" name="submit"  value="submit"  id="submit";>
</form>
</center>
</div>


<script type="text/javascript">
 
</script>


<?php
if (isset($_POST['submit'])) {


extract($_POST);
include('co.php');
	 $result = mysqli_query($con,"SELECT * FROM login WHERE  pass = '". $_POST['pass']."'");
  $row  = mysqli_fetch_array($result);
  if(is_array($row))
   {
  $_SESSION["loginid"] = $row['loginid'];
  
  } 
  else 
  {
  
  }

	
$pass=$_POST['pass'];
$npwd= $_POST['npwd'];
$cpwd=$_POST['cpwd'];

$o=md5("pass");
$n=md5("npwd");
$c=md5("cpwd");

if($npwd==$cpwd)
{
$q="UPDATE  login SET  pass ='$n' WHERE loginid='$loginid' ";
     if(mysqli_query($con,$q))
     {
       echo "<script>


window.location.href='login.php';
</script>";
     }
     else
     {
       echo "Error: " . $q . "" . mysqli_error($con);
     }

   }}
?>
</body>
</html>
<?php
include 'footer.html';
?>