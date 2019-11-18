
<?php 
session_start(); 

 include 'headers.html';
include ("co.php");
if(isset($_POST['login']))
{
    $uname =$_POST['uname'];
  $pass =$_POST['pass'];
//echo $u_pass;
$p=md5($pass);

$sql="select * from login where uname='$uname' and pass='$p'";
//echo $sq;

$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount!=0)
{

  while($row=mysqli_fetch_array($result))
  {
    $dbu_name=$row['uname'];
    $dbu_pass=$row['pass'];
    $dbu_type=$row['type'];
    
    $id=$row['loginid'];

        
    if($dbu_name==$uname && $dbu_pass==$p)
    {
      $_SESSION['uname']=$dbu_name;
            $_SESSION['pass']=$dbu_pass;
            $_SESSION['login']="1";
            $_SESSION['loginid']=$id;
         //echo $dbu_type;
      /*if($dbu_type==admin)  
      {
        $_SESSION['type']="";
        
        
                header('Location: adminhome.php');
      }*/
       if($dbu_type==S)
      {
        $_SESSION['type']="Student";
        $sql1="select  * from reg where loginid ='$id'";
        $result1=mysqli_query($con,$sql1);
        if($row1=mysqli_fetch_array($result1))
        $usr_name=$row1['name'];
        $approve=$row1['approve'];
        $_SESSION['name']=$usr_name;
                  if($approve==1){
                  header('Location: userhome.php');
                  }
                  else
                  { 
                
                    
                    header('Location: login.php');
                  }
      }
      else if($dbu_type==T )
      {
        $_SESSION['type']="teacher";
                 $sql1="select  * from reg where loginid ='$id'";
        $result1=mysqli_query($con,$sql1);
        if($row1=mysqli_fetch_array($result1))
        $usr_name=$row1['name'];
      $approve=$row1['approve'];
        $_SESSION['name']=$usr_name;
              
               if($approve==1){
                  header('Location: staffhome.php');
                  }
                  else
                  { 
                
                    
                    header('Location: login.php');
                  }
      }
      else if($dbu_type==admin)
      {
        $_SESSION['type']="admin";
        
       
                header('Location: adminhome.php');
      }
    
    else
      
        {
        }?>
  <script>
 alert("Invalid login credentials");
 window.location='login.php'
</script>;
<?php
        //header("location:signin.php?error=wrong password");
          //echo "wrong";
        }
  }
}
else
{?>
  <script>
 alert("User not found");
 window.location='login.php'
</script>;
<?php
      //header("location:signin.php?error=User Not Found");
      //echo "not found"; 
}

$result = mysqli_query($con,"UPDATE `login` SET  `status` =1 WHERE `loginid`='$id' ");
  $row  = mysqli_fetch_array($result);  
}
?>  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
  function myfunction1()
{
var x=document.forms["check_login"]["uname"].value;
if(x=="")
{
alert("Please Fill  username Field");
document.getElementById('uname').focus();
return false;
}

  
var y=document.forms["check_login"]["pass"].value;
if(y=="")
{
alert("Please Fill  password Field");
document.getElementById('pass').focus();
return false;
}

return (true);

}


</script>
</head>



<body background="bg.jpg">
<center>


<div class="frm">
<div class="container">
<form name="check_login" action=" " 
 onsubmit="return myfunction1()" method="post">
  <fieldset >
<legend><h2><font color="white">LOGIN</font></h2></legend><br>

<font size="3" color="white">
    <div class="row">
      <div class="col-25">
        <label for="fname">Username:</label>
      </div>
      <div class="col-75">
        <input type="text"  name="uname" id="uname" placeholder="username.." >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password"> Password:</label>
      </div>
      <div class="col-75">
        <input type="password" id="pass"  name="pass" placeholder="password">
      </div>
    </div><br><br>
 
    <div class="row">
     <center><input type="submit" value="LOGIN" name="login"></center><br>
    </div>
    
    
</fieldset>
  </form>
</center>
</font>  

</body>
</html>
<?php
include 'footer.html';
?>


