
<?php
include 'co.php';
include 'headers.html';
?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		
	</style>
</head>
<body>
<?php
$sql="SELECT * FROM reg join login ON login.loginid = reg.loginid join student ON login.loginid = student.loginid" ;
$run=mysqli_query($con,$sql);

?><br><br><br>
<center><h1>Student Details</h1><br>
<table border="1" width="65%" align="center" bgcolor="yellow">

	<th>Exam</th>
	<th>Username</th>
	<th>Center</th>
	<th>Exam</th>
	<th>Action</th>



<?php
while($row=mysqli_fetch_array($run))
{

?>
<tr>
<td ><?php echo $row['name'];?></td>
<td ><?php echo $row['uname'];?></td>
<td ><?php echo $row['center'];?></td>
<td ><?php echo $row['cat_id'];?></td>
<td align="center"><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

</tr>



<?php
}
include 'footer.html';
?>
</table></center>
</body>
</html>






