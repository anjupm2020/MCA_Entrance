<?php
include('co.php') ;
session_start();
$loginid = $_SESSION['loginid'];
$type = $_SESSION['type'];
$q = $_SESSION['q'];

//echo "<script>alert('$q');</script>";
$sql = "SELECT  * FROM `question` WHERE cat_id='$type'" ;
$result = mysqli_query($con, $sql);
 
$n=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)) {
          $qno=$row['qno']; 
          $query = "SELECT * FROM `answers` WHERE loginid='$loginid' AND qno='$qno' AND cat_id='$type' ";
          $res = mysqli_query($con, $query);
          if(mysqli_num_rows($res)==0) {
           
      ?>
            <form action="store_result.php" method="post">
            <input type="hidden" name="qno" value="<?php echo $row['qno'];?>">
            <?php echo  $q; ?> <?php echo $row["qn"];?> <br />
            <input type="radio" name="userans"  value="<?php echo $row["o1"];?>  "> <?php echo $row["o1"];?>  
            
            <input type="radio" name="userans"   value="<?php echo $row["o2"];?>  "> <?php echo $row["o2"];?> <br />

            <input type="radio" name="userans"   value="<?php echo $row["o3"];?>  "> <?php echo $row["o3"];?>

            <input type="radio" name="userans"   value="<?php echo $row["o4"];?>  "> <?php echo $row["o4"];?> <br /><br />
           <input type="submit" name="submit" value="next">
            </form>
         <?php
         break;
           }
           else if(mysqli_num_rows($res)!=$q)
           {
            continue;
           }
}

                   
     
?>
<div class="out">

  <?php echo $q ." "."Out of 10 " ; ?>
</div>
<html>
<head>
  <style type="text/css">
    .out
{
  width:100%;
  background-color:#ccc11e;
  padding:15px;
  padding-left:600px;
  margin-top:110px; 

}
  </style>
</head>
</html>

