<?php
session_start();
include 'co.php'; 
include 'headers.html';
?>

<html>
<head>
<style>

}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  }
  </style>
  </head>
<body>
    




 <?php 



 /*$sql="SELECT * FROM register1 WHERE `status`='0'";*/
 $sql="SELECT * FROM `reg`,`login`,`teacher` WHERE reg.loginid=login.loginid and login.loginid=teacher.loginid";
 $ch=mysqli_query($con,$sql);
  $no=1;
   ?>

<table  border='1' class="align-center"style=" margin-top: 100px; text-align: center;margin-left: auto;margin-right: auto;border-collapse: collapse;width: 50%;">
  <tr class="align-center" style="color: black;font-size:15px; ">
  <th>Name</th>
  <th> Email</th>   
  <th>Mobile</th>
  
  <th>Approve</th>
  <th>Reject</th>
  </tr>
  <?php
    while($row=mysqli_fetch_array($ch))
	 {
	 ?>
	 
<tr>
<td class="align-center" >
<?php
echo $row['name'];
?>
</td>

<td class="align-center">
<?php
echo $row['email'];
?>
</td >
<td class="align-center">
<?php
echo $row['mobile'];
?>
</td>

<?php
$app=$row['approve'];
 if($app=="0"){
	 
 
?>

</td>
<td class="align-center">
<!--<button>APPROVE</button>  <button>REJECT</button>-->
<form action="teachapprove.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['loginid']; ?>"/>
    <input type="submit" value="Approve" name="submit">
  </form>
</td>

	 <?php
	 }
	 else{
	 ?><td><font size="2px" color="green"><b> Approved<?php
 } 
 ?>
 <?php
$app1=$row['approve'];
 if($app1=="1"){
	 
 
?>
<td>
  <form action="teachremove.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['loginid']; ?>"/>
    <input type="submit" value="Reject">
  </form>
  </td>
  <?php
 }
 else{
	 
 
 ?><td><font size="2px" color="red"><b>Rejected <?php
 } 
 ?>
</tr>
<?php
$no++;
}
?>
</table>
 </body>
</html>
