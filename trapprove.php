
<?php
include 'co.php';
include 'headers.html';
session_start();

  $loginid=$_SESSION['loginid'];
?>
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
<?php
$select="SELECT * FROM `reg`,`login`,`teacher` WHERE reg.loginid=login.loginid and login.loginid=teacher.loginid and login.type='T' ";
$res=mysqli_query($con,$select);
?>
<h1>Student</h1>
<table border="1" width="100%" >
	
	<th width="15%" >Name</th>
	<th>Email</th>
	<th>Mobile</th>
	
	<th>Subject</th>
	<th>College</th>
	<th>Certificates</th>
	<th colspan="2">Action</th>
	
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>

<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<
<td><?php echo $row['sub'];?></td>
<td><?php echo $row['col'];?></td>

	<td><form action="selectimage.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['loginid']; ?>"/>
    <input type="submit" value="Certificates">
 </form></td>
<td><form action="teachapprove.php " method="POST">
    <input type="hidden" name="id" value="<?php echo $row['loginid']; ?>"/>
    <input type="submit" value="Approve">
 </form></td>
<td><form action="teachremove.php" method="POST">
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