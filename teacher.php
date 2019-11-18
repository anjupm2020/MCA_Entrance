<?php
	include("co.php");
	session_start();
	include 'headers.html';

  $loginid=$_SESSION['loginid'];

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="teachval.js"></script>
	</head>

	<body>
		
		
				<center>

<h1 align="center">ONLINE MCA ENTRANCE</h1>
<div class="frm">
<div class="container">
  <form name="registration" action=" "   onsubmit="return formValidation()" method="post">
	<fieldset >
<legend><h2><font color="white">REGISTER</font></h2></legend><br>

<font size="3" color="white">
    <div class="row">
      <div class="col-25">
        <label for="fname">Subject:</label>
      </div>
      <div class="col-75">
        <input type="text" id="sub" name="sub" placeholder="Enter our subject" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password"> College Name:</label>
      </div>
      <div class="col-75">
        <input type="text" id="col" name="col" placeholder="Your College Name">
      </div>
    </div><br>
    <div class="row">
      <div class="col-25">
        <label for="password"> Contact Person for College:</label>
      </div>
    <div class="col-75">
        <input type="text" id="col" name="col" placeholder="Contact Person for College">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password"> City:</label>
      </div>
      <div class="col-75">
        <input type="text" id="col" name="col" placeholder="Your College Name">
      </div>
    </div><br>
    <br><br>
 
    <div class="row">
     <center><input type="submit" value="Register" name="submit"></center><br>
    </div>
    
    
</fieldset>
  </form>
</center>
</font>	
							
	</body>
</html>

 <?php 
   
 $loginid = $_SESSION['loginid'];
 if(isset($_POST['submit']))
{	
	



		 $sub = $_POST['sub'];
		
		 $col = $_POST['col'];
		
       
		
		
		
              $sql = "INSERT INTO teacher(`loginid`,`sub`, `col`)VALUES ('".$loginid."','".$sub."','".$col."')" ;
 if(mysqli_query($con, $sql)) {
   echo '<script language="javascript">';
 echo 'alert("recorded")';

// echo '</script>';
 header('location: login.php');

 }
 else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
 }
			

		
     }

?>  
 <?php
include 'footer.html';
?>