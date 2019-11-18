<?php
include 'co.php';
include 'headers.html';
session_start();
$loginid = $_SESSION['loginid'];
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
  table {
  border-collapse: collapse;
  width: 40%;
  margin-top:140px;
  background-color:;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>

</head>
<body>
  <form>
    <center><br><br><br>
<?php
    $select="select * from history";
    $res=mysqli_query($con,$select);
    ?>
     <select id="cat_id" name="cat_id[]" multiple class="form-control"
     required="please select Catogory"  onblur="return validateForm()" >
      <?php
                   while($row=mysqli_fetch_array($res))
                      {

                        ?>
                      <option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
           
                      <?php
                      }
   ?>
     </select>
<input type="submit" value="submit" name="submit">
</form>
</center>
<?php
$no=$_GET['no'];
$score=0;

$qry3 = "SELECT * from `answers` where loginid='$no'  ";
$result3 = mysqli_query($con,$qry3);



while ($row3=mysqli_fetch_array($result3)) {



       $a=$row3['ans'];
       $b=$row3['userans'];
     if($a==$b)
     {
       $score+=1;
       $rights = $score;
     }
else{
    

    
} }


$q=mysqli_query($con,"SELECT * FROM quiz  " ); 
?>
<center>
<table>
  <th></th>
  <th></th>
<?php
      while($row=mysqli_fetch_array($q) )
      {
        $ri=$row['correct'];
        $wr=$row['wrong'];
        $to=$row['total'];
      }

   $rights = $score;
$wrong= $to-$rights;
      $point=$ri*$rights;
      $points=$wrong*$wr;

   ?>
<br><h1>Result</h1>
<tr>
<td style="font-size:20px;"><?php echo "No. of Right Answers=" ?></td>
<td style="font-size:20px;"><?php echo $rights ?></td>
</tr>
<tr><td style="font-size:20px;"><?php echo "No. of wrong Answers="?></td>
  <td style="font-size:20px;"><?php echo $wrong= $to-$rights ?></td>
  <tr><td style="font-size:20px;"><?php echo "Score=" ?></td>
    <td style="font-size:20px;"><?php echo $point=$ri*$rights ?></td></tr>
    <tr><td style="font-size:20px;"><?php echo "Total Score="?></td>
      <td style="font-size:20px;"><?php echo $total=$point-$points ?></td>
      </tr>
 
 <?php
  $q=mysqli_query($con,"UPDATE `history` SET `rights`=$rights,`wrong`=$wrong,`total`=$total   WHERE   loginid = '$loginid'")or die('Error124');
 ?> 
       

  <!-- ?> -->
  </center>
  </table></body>
</html>

</tr>
<?php
include 'footer.html';
?>
