<?php
include('co.php') ;
include 'headers.html';
session_start();
$loginid = $_SESSION['loginid'];
extract($_POST);
$type=$_SESSION['type'];


$select="SELECT * from quiz where cat_id='$type'";
$res=mysqli_query($con,$select);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
  table {
  border-collapse: collapse;
  width: 60%;
  margin-top:140px;
  background-color:;
  float: center;
}

th, td {
  padding: 4px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
button {
  background-color:red ;
  color: white;
  padding: 12px 20px;
  margin-left:20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

</style>
</head>
<body background="">

<center>
<table border="1" >
    <th>Exam</th>
    <th>Correct Point</th>
    <th>Wrong Point</th>
    <th>Total Question</th>
    <th>Time</th>
    <th>Action</th>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td style="color:red;" ><center><?php echo $row['cat_id'];?></center></td>
<td style="color:red;"><center><?php echo $row['correct'];?></td>
<td style="color:red;" ><center><?php echo $row['wrong'];?></td>
<td style="color:red;"><center><?php echo $row['total'];?></td>
<td style="color:red;"><center>2 min</td>
<td >
<form method="post" action="update_history.php">
	<button type="submit" name="submit">Start</button>
</form>

	</td>
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


