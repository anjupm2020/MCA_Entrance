

<?php
session_start();
include 'co.php';
include 'headers.html';

?>


<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <script type="text/javascript" src="regval.js"></script>
  <style type="text/css">
  input[type=text],[type=password],select,[type=date],[type=number],[type=file],[type=email]{
   
    padding: 12px ;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  width:40%;
   margin-left:500px;
}
input[type=submit]
{

  background-color:green ;
  color: white;
  padding: 12px 20px;
  margin-left:500px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top:10px;
}


.ten
{
  background-color:blue;
}
</style>
 </head>
 <body background="b.jpg">

 <center> <h1>Registration</h1></center>
  <div class="container" style="width:600px;">
   <h2 align="center"></h2>
   <br /><br />
   <form method="post" name="myform" id="framework_form" action=" " onsubmit="return myfunction()">



    <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <font color="white">Enter Birth Date<br>
    <input type="date" name="dob" id="dob"   placeholder="name"><br><br>
    <input type="email" name="email" id="name"  placeholder="email"><br><br>
    <input type="number" name="mobile" id="mobile"  placeholder="mobile"><br><br>
     <input type="text" name="col" id="col" placeholder="Enter your College name"><br><br>
     <input type="text" name="sub" id="sub" placeholder="Enter your Subject"><br><br>
    <input type="text" name="uname" id="uname" placeholder="username"><br><br>
    <input type="password" name="pass" id="pass" placeholder="password"><br><br>
    <input type="password" name="cpass" id="cpass" placeholder="confirm"><br><br>
    <input type="file" name="file" ><br><br>
    
<center>
    <div class="form-group">
     <input type="submit" class="btn btn-info" name="submit" value="Register" />
    </div></center>
   </form>
   <br />
  </div>
 </body>
</html>








<?php

 if(isset($_POST['submit']))
  {
     $name = $_POST['name'];
     $uname= $_POST['uname'];
     $pass = $_POST['pass'];
     $mobile = $_POST['mobile']; 
     $email = $_POST['email'];
     $dob=$_POST['dob'];
     $sub = $_POST['sub'];
     $col = $_POST['col'];
     
       $ps=md5($pass);

$str="insert into login set uname='$uname',pass='$ps',type='T'";
       if((mysqli_query($con,$str)))  {
      
      
         } 

$result = mysqli_query($con,"SELECT * FROM `login` WHERE uname='$uname' and pass ='$ps'");
   $row  = mysqli_fetch_array($result);
   if(is_array($row))
   {
   $_SESSION["loginid"] = $row['loginid'];

  // /
  } 
   else 
   {

   }

 $loginid = $_SESSION['loginid'];


        $sql="insert into reg set loginid='$loginid',name='$name',email='$email',mobile='$mobile'";
     
       if((mysqli_query($con,$sql))) 
        {
      
      
        }


  

       
       $dir='photo/';
$target_file=$dir.basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    
      
       
$sq="insert into `teacher` set loginid='$loginid',sub='$sub',col='$col',file='$target_file'";
     
       if((mysqli_query($con,$sq))) 
        {
        
    header('location:login.php');
        }

      
 
    
     }
 
?>