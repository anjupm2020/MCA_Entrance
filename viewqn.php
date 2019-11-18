
<?php
include 'co.php';
include 'headers.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center>
<?php
$select="SELECT * FROM `question`,`answers` WHERE question.qno=answers.qno";
$res=mysqli_query($con,$select);
?>
<table  width="60%">
	<th>qno</th>
	<th width="20%">Question</th>
	<th>Option1</th>
	<th>Option2</th>
	<th>Option3</th>
	<th>Option4</th>
	<th>Answer</th>
<?php
while($row=mysqli_fetch_array($res))
{

?>
<tr>
<td><?php echo $row['qno'];?></td>
<td width="40%"><?php echo $row['qn'];?></td>
<td><?php echo $row['o1'];?></td>
<td><?php echo $row['o2'];?></td>
<td><?php echo $row['o3'];?></td>
<td><?php echo $row['o4'];?></td>
<td><?php echo $row['ans'];?></td>

</tr>
<?php
}
?>
</table></center>
</body>
</html>