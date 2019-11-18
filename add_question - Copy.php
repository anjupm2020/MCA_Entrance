<?php
include 'co.php';
session_start();

include 'headers.html';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">
<script type="text/javascript" src="qn.js"></script>
</head>



<body>

 
<div class="full">
<form class="box" form action="" method="post" name="registration" onsubmit="return formValidation()" >
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

<textarea rows="4" cols="36"  name="qn" id="qn" placeholder="Add question"></textarea>
<input type="text"  id="o1" name="o1" placeholder="option1" > <br>
<input type="text" id="o2" name="o2" placeholder="option2" > <br>
<input type="text" id="o3"  name="o3" placeholder="option3" > <br>
<input type="text" id="o4" name="o4" placeholder="option4" > <br>

<input type="text" id="ans" name="ans" placeholder="ans" > <br>
<input type="submit" name="submit" value="ADD"><br>

 
</form>
</div>
</body>
</html>


<?php


if(isset($_POST['submit']))
{ 
  

    $cat_id = $_POST['cat_id'];
    $qn = $_POST['qn'];
    $o1 = $_POST['o1'];
    $o2 = $_POST['o2'];
    $o3 = $_POST['o3'];
    $o4 = $_POST['o4'];
    $ans=$_POST['ans'];
     $sql = "INSERT INTO `question`(`cat_id`,`qn`,`o1`,`o2`,`o3`,`o4`) VALUES ('$cat_id','$qn','$o1','$o2','$o3','$o4')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
$result = mysqli_query($con,"SELECT * FROM `question`   WHERE qn='$qn'");
   $row  = mysqli_fetch_array($result);
   if(is_array($row))
   {   
      $_SESSION["qno"] = $row['qno'];
      $_SESSION["cat_id"] = $row['cat_id'];
    } 
   else 
   { }
       $qno = $_SESSION['qno'];

          $cat_id=$_SESSION['cat_id']; 
         $ans=$_POST['ans'];

        $sq="INSERT INTO `answers`(`qno`,`ans`,`cat_id`) VALUES ('$qno','$ans','$cat_id')";
     
       if((mysqli_query($con,$sq))) 
        {
      
        }


      

    
    }
?> 