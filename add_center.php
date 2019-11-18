<?php
include 'co.php';
session_start();
include 'headers.html';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css"> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
	    function formValidation()
{


  var a=document.forms["registration"]["cen_name"].value;
if(a=="")
{
alert("Please Fill Catogory Field");
document.getElementById('cen_name').focus();
return false;
}
if ((a.length < 3) || (a.length > 30))
  {
    alert("Your Character must be 3 to 15 Character");
    document.getElementById('cen_name').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.registration.cen_name.value)) 
      {
      alert("Error: Please enter valid name!");
      registration.cen_name.focus();
    return false;
     
      }


var b=document.forms["registration"]["place"].value;
if(b=="")
{
alert("Please Fill Place Field");
document.getElementById('place').focus();
return false;
}
if ((b.length < 3) || (b.length > 30))
  {
    alert("Your Character must be 3 to 15 Character");
    document.getElementById('place').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.registration.place.value)) 
      {
      alert("Error: Please enter valid name!");
      registration.place.focus();
    return false;
     
      }




 return true;
}
</script>
</head>



<body>
<script></script>
 
<div class="full">
<form class="box" form action="" method="post" name="registration" onsubmit="return formValidation()" >
  


<input type="text" id="cen_name" name="cen_name" placeholder="Enter Center Name" > <br>
<input type="text" id="place" name="place" placeholder="Enter place of Center" > <br>
<input type="text" id="code" name="code" placeholder="Enter  Center code" > <br>
<input type="text" id="seat" name="seat" placeholder="Enter no .of seats" > <br>
<input type="submit" name="submit" value="ADD"><br>
 <!-- <a href="register.php">New user?</a> -->
 
</form>
</div>



<?php


if(isset($_POST['submit']))
{ 
  $cen_name = $_POST['cen_name'];
    $place = $_POST['place'];
    $code = $_POST['code'];
    $seat = $_POST['seat'];
  $ss=mysqli_query($con,"select * from center where cen_name='$cen_name'");
  $i=mysqli_num_rows($ss);
  if($i>0)
  {
         echo "
        <script>
        alert('This Center already exists');
        </script>";
  }
  else
  {



    
     $sql = "INSERT INTO `center`(`cen_name`,`place`,`code`,`seat`) VALUES ('$cen_name','$place','$code','$seat')";


     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}}
      

    
    }
?> 

<br><br><center>
<?php
$select="SELECT * FROM `center` where status=1 ";
$res=mysqli_query($con,$select);
?>
<table  width="80%">
  <tr>
   
    <th width="30%" >Center</th>
    <th width="10%">Place</th>
     <th width="10%">Center code</th>
      <th width="10%">No.of Seats</th>
      <th width="10%">Action</th>
  </tr>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $row['cen_name'];?></td>
<td><?php echo $row['place'];?></td>
<td><?php echo $row['code'];?></td>
<td><?php echo $row['seat'];?></td>
<td>
  <!-- <form action="delete.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cen_id']; ?>"/>
    <input type="submit" value="Delete">
  </form> -->
<form action="update.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cen_id']; ?>"/>
    <input type="submit" value="Delete">
  </form>


  </td>

  
  

</tr>
<?php
}
?>
</table>



<?php
$select="SELECT * FROM `center` where status=0 ";
$res=mysqli_query($con,$select);
?>
<table  width="80%">
  <tr>
   
    <th width="30%" ></th>
    <th width="10%"></th>
     <th width="10%"></th>
      <th width="10%"></th>
      <th width="10%"></th>
  </tr>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $row['cen_name'];?></td>
<td><?php echo $row['place'];?></td>
<td><?php echo $row['code'];?></td>
<td><?php echo $row['seat'];?></td>
<td>
  <!-- <form action="delete.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cen_id']; ?>"/>
    <input type="submit" value="Delete">
  </form> -->
<form action="addstatus.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['cen_id']; ?>"/>
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
