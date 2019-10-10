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
  


<input type="text" name="cen_name" placeholder="Add Center" > <br>
<input type="text" name="place" placeholder="Add place" > <br>

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
  


    $cen_name = $_POST['cen_name'];
    $place = $_POST['place'];
     $sql = "INSERT INTO `center`(`cen_name`,`place`) VALUES ('$cen_name','$place')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
      

    
    }
?> 