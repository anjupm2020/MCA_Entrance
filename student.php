<?php
	include("co.php");
	include 'headers.html';
	session_start();

  $loginid=$_SESSION['loginid'];

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="reg.css">

    <title>Webslesson Tutorial | Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
	<!-- 	<script type="text/javascript" >
			
           function formValidation()
{


     var a = document.registration.dob.value;
     var b = document.registration.elig.value;
     
     var c = document.registration.unv.value;
     var d = document.registration.yop.value;
     var e = document.registration.center.value;
     


if(a=="")
{
alert("Please Enter Your dob");
return false;
}


 if(b=="")
 {
 alert("Please Select your eligibility");
 
 return false;
 }


if(c=="")
 {
 alert("Please Select your University");

 return false;
 }
 if(d=="")
 {
 alert("Please Enter Your Year of pass");

 return false;
 }
 if(e=="")
 {
 alert("Please select your exam center");

 return false;
 }
 return true;

}

		</script> -->
	</head>

	<body background="b.jpg">
		          
							<div class="full">

								<center><font color="red">	<h1>Registration Form</h1></font></center>          


<form method="post" action=" "  class="box" name="registration" onsubmit="return formValidation()">
            
									
<input type="date" id="dob" name="dob" placeholder="Your Date of birth">
    <?php
    $select="select * from course";
    $res=mysqli_query($con,$select);
    ?>
    <select  name="elig" id="elig"  ><option value="">select your Eligibility</option>
                 <?php
                   while($row=mysqli_fetch_array($res))
                      {

                        ?>
                      <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
					 
                      <?php
                      }
   ?>

                                
      </select>
    

    <!-- <input type="text"  name="unv" placeholder="Your University"> -->
     <?php
    $select="select * from unv";
     $res=mysqli_query($con,$select);

     ?>
    <select  name="unv"  id="unv">
      <option value="">select your University</option>
                       <?php
     while($row=mysqli_fetch_array($res))
   {

   ?>
       <option value="<?php echo $row['uid'];?>"><?php echo $row['unv'];?></option>
           
    <?php
    }
      ?>

    <input type="number"  name="yop" placeholder="Your Year Of Passing..">
    
   
      <?php
    $select="select * from center";
     $res=mysqli_query($con,$select);

     ?>
    <select  name="center"  id="center">
    	<option value="">select your Exam center</option>
                       <?php
     while($row=mysqli_fetch_array($res))
   {

   ?>
       <option value="<?php echo $row['cen_id'];?>"><?php echo $row['cen_name'];?></option>
					 
    <?php
    }
      ?>
<br><br><br>

      
     <?php
    $select="select * from cat";
    $res=mysqli_query($con,$select);
    ?>
     <select id="cat_id" name="cat_id[]" multiple class="form-control" >
      <?php
                   while($row=mysqli_fetch_array($res))
                      {

                        ?>
                      <option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
           
                      <?php
                      }
   ?>

<br><br>
								<input type="submit" name="submit" value="REGISTER">

               
							</form>
						
					</div>
								
		
		
	</body>
</html>

<script>
$(document).ready(function(){
 $('#cat_id').multiselect({
  nonSelectedText: 'Select Exams',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'270px'
 });
 });
 </script>




  <!-- <?php

$loginid = $_SESSION['loginid'];
if(isset($_POST['submit']))
{	
	


		$dob = $_POST['dob'];
		
		$elig = $_POST['elig'];
		
       $unv= $_POST['unv'];
		
		
         $yop = $_POST['yop'];
		$center = $_POST['center'];
		
		
		
             $sql = "INSERT INTO student(`loginid`,`dob`, `elig`,`unv`,`yop`,`center`)VALUES ('".$loginid."','".$dob."','".$elig."','".$unv."','".$yop."','".$center."')" ;
if(mysqli_query($con, $sql)) {
  //echo '<script language="javascript">';
//echo 'alert("recorded")';

//echo '</script>';
 header('location: login.php');

}
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
			

		
    }
?> -->



<?php
if(isset($_POST["cat_id"]))
{
 $cat_id = '';
 foreach($_POST["cat_id"] as $row)
 {
  $cat_id .= $row . ', ';
 }
 $cat_id = substr($cat_id, 0, -2);
 $query = "INSERT INTO student(cat_id) VALUES('".$cat_id."')";
 if(mysqli_query($con, $query))
 {
  echo 'Data Inserted';
 }
}
?> 
<br><br> 
 <?php
include 'footer.html';
?> 
 -->
