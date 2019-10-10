<?php
include 'co.php';
session_start();

include 'headers.html';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">

</head>



<body>

 
<div class="full">
<form class="box" form action="" method="post" >
  


 <?php
    $select="select * from cat";
$res=mysqli_query($con,$select);

     ?>
    <select  name="catogory" ><option>select Catogory</option>
                       <?php
while($row=mysqli_fetch_array($res))
{

?>
<option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
           
<?php
}
?>
<input type="text" name="name">
<?php
    $select="SELECT * FROM `login` WHERE type='T'";
$res=mysqli_query($con,$select);

     ?>
    <select  name="teacher" ><option>select Catogory</option>
                       <?php
while($row=mysqli_fetch_array($res))
{

?>
<option value="<?php echo $row['loginid'];?>"><?php echo $row['uname'];?></option>
           
<?php
}
?>
 <input type="submit" name="submit" value="ADD">
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
  


    $catogory = $_POST['catogory'];
    $teacher = $_POST['teacher'];
     $sql = "INSERT INTO `add_teachers`(`catogory`,`teacher`) VALUES ('$catogory','$teacher')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
      

    
    }
?> 