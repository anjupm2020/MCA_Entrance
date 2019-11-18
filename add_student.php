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


  var a=document.forms["registration"]["sname"].value;
if(a=="")
{
alert("Please select  student");
document.getElementById('sname').focus();
return false;
}

var b=document.forms["registration"]["center"].value;
if(b=="")
{
alert("Please select Center Field");
document.getElementById('center').focus();
return false;
}








 return true;
}
</script>

</head>



<body>

 
<div class="full">
<form class="box" form action="" method="post" name="registration" onSubmit="return formValidation()">
  


 <?php
    $select="select * from reg,student where reg.loginid=student.loginid";
$res=mysqli_query($con,$select);

     ?>
    <select  name="sname" id="sname"><option>select Catogory</option>
                       <?php
while($row=mysqli_fetch_array($res))
{

?>
<option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
           
<?php
}
?> </select>

<?php
    $select="select * from reg,student where reg.loginid=student.loginid";
$res=mysqli_query($con,$select);
$row=mysqli_fetch_array($res);

     ?>
     Center option of Student:<br>
     <input type="text" name="cen" value="<?php echo $row['center']; ?>">

    <select  name="center" id="center" ><option>select Center</option>
                       <?php
while($row=mysqli_fetch_array($res))
{

?>

<option value="<?php echo $row['center'];?>"><?php echo $row['center'];?></option>
           
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
  


    $sname = $_POST['sname'];
    $center = $_POST['center'];
     $sql = "INSERT INTO `add_student`(`sname`,`center`) VALUES ('$sname','$center')";
     if(mysqli_query($con, $sql)) {
  
         }
else{
    echo "Error: " . $sql . "" . mysqli_error($con);
            
}
      

    
    }
?>  -->