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
    <select  name="cat_id" ><option>select Catogory</option>
                       <?php
while($row=mysqli_fetch_array($res))
{

?>
<option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
           
<?php
}
?>

<textarea name="qn" placeholder="Add question"></textarea>
<input type="text" name="o1" placeholder="option1" > <br>
<input type="text" name="o2" placeholder="option2" > <br>
<input type="text" name="o3" placeholder="option3" > <br>
<input type="text" name="o4" placeholder="option4" > <br>


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
  

    $cat_id = $_POST['cat_id'];
    $qn = $_POST['qn'];
    $o1 = $_POST['o1'];
    $o2 = $_POST['o2'];
    $o3 = $_POST['o3'];
    $o4 = $_POST['o4'];
     $sql = "INSERT INTO `question`(`cat_id`,`qn`,`o1`,`o2`,`o3`,`o4`) VALUES ('$cat_id','$qn','$o1','$o2','$o3','$o4')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
      

    
    }
?> 