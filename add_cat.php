<?php
include 'co.php';
session_start();

include 'headers.html';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">
<script type="text/javascript">
    
    function formValidation()
{


  var a=document.forms["registration"]["cat_name"].value;
if(a=="")
{
alert("Please Fill Catogory Field");
document.getElementById('cat_name').focus();
return false;
}
if ((a.length < 3) || (a.length > 30))
  {
    alert("Your Character must be 3 to 15 Character");
    document.getElementById('cat_name').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.registration.cat_name.value)) 
      {
      alert("Error: Please enter valid name!");
      registration.cat_name.focus();
    return false;
     
      }

var b=document.forms["registration"]["fee"].value;
if(b.value=="")
{
alert("Please Enter the Amount");
document.getElementById('fee').focus();
return false;

}
 return true;
}
</script>
</head>



<body>

 
<div class="full">
<form class="box" form action="" method="post" name="registration" onsubmit="return formValidation()" >
  


<input type="text"  id="cat_name" name="cat_name" placeholder="Add Catogory" > <br>
<input type="number" id="fee" name="fee" placeholder="Add Amount" > <br>

<input type="submit" name="submit" value="ADD" ><br>
 
 
</form>
</div>

<!--  <?php
include 'footer.html';
?> -->


<?php


if(isset($_POST['submit']))
{ 
  


    $cat_name = $_POST['cat_name'];
    $ss=mysqli_query($con,"select * from cat where cat_name='$cat_name'");
  $i=mysqli_num_rows($ss);
  if($i>0)
  {
         echo "
        <script>
        alert('This Catogory already exists');
        </script>";
  }
  else
  {
     $sql = "INSERT INTO `cat`(`cat_name`,`fee`) VALUES ('$cat_name','$fee')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}}
      

    
    }
?>   -->

<center>
<?php
$select="SELECT * FROM `cat` where status=1 ";
$res=mysqli_query($con,$select);
?>
<table  width="80%">
  <tr>
   <th width="10%">Id</th>
    <th width="30%" >catogory</th>
   
  </tr>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $row['cat_id'];?></td>
<td><?php echo $row['cat_name'];?></td>

<td>
  
<form action="deletecat.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cat_id']; ?>"/>
    <input type="submit" value="Delete">
  </form>


  </td>

  
  

</tr>
<?php
}
?>
</table>



<?php
$select="SELECT * FROM `cat` where status=0 ";
$res=mysqli_query($con,$select);
?>
<table  width="50%">
  <tr>
   
    <th width="10%" ></th>
    <th width="30%"></th>
     
      <th width="10%"></th>
  </tr>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $row['cat_id'];?></td>
<td><?php echo $row['cat_name'];?></td>

<td>
  <!-- <form action="delete.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cen_id']; ?>"/>
    <input type="submit" value="Delete">
  </form> -->
<form action="addcatstatus.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cat_id']; ?>"/>
    <input type="submit" value="ADD">
  </form>


  </td>

  
  

</tr>
<?php
}
?>
</table>
</center>
</body>
</html>