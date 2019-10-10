<?php
include 'co.php';
session_start();

include 'header.html';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">

</head>



<body>

 
<div class="full">
<form class="box" form action="" method="post" >
  


<input type="text" name="cat_name" placeholder="Add Catogory" > <br>
<input type="text" name="fee" placeholder="Add Amount" > <br>

<input type="submit" name="submit" value="ADD"><br>
 <!-- <a href="register.php">New user?</a> -->
 
</form>
</div>
</body>
</html>
<?php
include 'footer.html';
?>


<?php


if(isset($_POST['submit']))
{ 
  


    $cat_name = $_POST['cat_name'];
     $sql = "INSERT INTO `cat`(`cat_name`,`fee`) VALUES ('$cat_name','$fee')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
      

    
    }
?> 