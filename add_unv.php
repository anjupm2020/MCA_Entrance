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
  


<input type="text"  id="unv" name="unv" placeholder="Add University" > <br>
<input type="text" id="place" name="place" placeholder="Add place" > <br>

<input type="submit" name="submit" value="ADD" ><br>
 
 
</form>
</div>



<?php


if(isset($_POST['submit']))
{ 
  


    $unv = $_POST['unv'];
    $place = $_POST['place'];
    $ss=mysqli_query($con,"select * from unv where unv='$unv'");
  $i=mysqli_num_rows($ss);
  if($i>0)
  {
         echo "
        <script>
        alert('This University already exists');
        </script>";
  }
  else
  {
     $sql = "INSERT INTO `unv`(`unv`,`place`,`status`) VALUES ('$unv','$place',1)";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}}
      

    
    }
?>  


<br><br><br>
<center>
<?php
$select="SELECT * FROM `unv` where status=1 ";
$res=mysqli_query($con,$select);
?>
<table  width="50%" ">
  <tr>
    <th>Id</th>
    <th width="25%">University</th>
    <th width="15%">Place</th>
    <th>Action</th>
  </tr><br><br><br>

<?php
while($row=mysqli_fetch_array($res))
{

?>

<tr>
  <td><?php echo $row['uid'];?></td>
<td><?php echo $row['unv'];?></td>
<td><?php echo $row['place'];?></td>
<td>
  
<form action="unvupdate.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['uid']; ?>"/>
    <input type="submit" value="Delete">
  </form>


  </td>
  
  

</tr>
<?php
}
?>
</table></center>
<?php
$select="SELECT * FROM `unv` where status=0 ";
$res=mysqli_query($con,$select);
?>
<table  width="50%" style="margin-left:350px;">
  <tr>
   
    <th width="" ></th>
    <th width="30%"></th>
     
      <th width="10%"></th>
      <th></th>
  </tr>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<<td><?php echo $row['uid'];?></td>
<td><?php echo $row['unv'];?></td>
<td><?php echo $row['place'];?></td>
<td>
<td>
  
<form action="addunvstatus.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['uid']; ?>"/>
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
