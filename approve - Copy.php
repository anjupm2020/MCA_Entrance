
<?php
include 'co.php';
include 'headers.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		input[type=submit] {
  background-color:green ;
  color: white;
  padding: 12px 20px;
  margin-left:20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	</style>
</head>
<body>
 
<center>
	<h1>Student</h1>
<?php
$select="SELECT * FROM `reg`,`login`,`student` WHERE reg.loginid=login.loginid and login.loginid=student.loginid and login.type='S' ";
$res=mysqli_query($con,$select);
?>

<table border="1" width="100%" >
	<th >Type</th>
	<th width="15%" >Name</th>
	<th>Email</th>
	<th>Mobile</th>
	<th>Username</th>
	<th>University</th>
	<th>Year of pass</th>
	<th>Center</th>
	<th>Action</th>
	<th>Delete</th>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $row['type'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['uname'];?></td>
<td><?php echo $row['unv'];?></td>
<td><?php echo $row['yop'];?></td>
<td><?php echo $row['center'];?></td>

<td><form action="studapprove.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['loginid']; ?>"/>
    <input type="submit" value="Approve">
 </form></td>
<td><form action="studremove.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['loginid']; ?>"/>
    <input type="submit" value="Delete">
 </form></td>

</tr>
<?php
}
?>
</table></center>
</body>
</html>
<?php
include 'footer.html';
?>