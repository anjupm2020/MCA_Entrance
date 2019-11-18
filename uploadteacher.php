<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Quizzer  </title>
   
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>

<style type="text/css">
  input[type=text],[type=password],select,[type=date],[type=number],[type=file],[type=email]{
   
    padding: 12px ;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  width:40%;
   margin-left:;
}

.ten
{
  background-color:blue;
}
</style>
 <script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="please enter your name.";
    return false;
  }
if ((y.length < 3) || (y.length > 30))
  {
    document.getElementById("errormsg").innerHTML="Your Character must be 4 to 15 Character.";
    
    
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.form.name.value)) 
      {
       document.getElementById("errormsg").innerHTML="please enter a valid name.";
      
    return false;
  }

  // var tr = document.forms["form"]["dob"].value;
  // if (tr == "") {
  //   document.getElementById("errormsg").innerHTML="Please select your birth date";
  //   return false;
  // }
  
  // var g = document.forms["form"]["email"].value;
  // if (g=="") {
  //   document.getElementById("errormsg").innerHTML="Please enter your emailid";
  //   document.getElementById('email').focus();
  //   return false;
  // }
  // var email = document.form.email.value;
  // atpos = email.indexOf("@");
  // dotpos = email.lastIndexOf(".");
  // if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
  // {
  //    document.getElementById("errormsg").innerHTML="Please enter a valid email id";
  //  document.getElementById('email').focus();
  //    return false;
  // }

  //  var p = document.forms["form"]["mobile"].value;
  // if (p=="" && p.length != 10) {
    
  //   document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
  //    document.getElementById('mobile').focus();
  //   return false;
    
  // }
  // if (p.length<0) {
     
  //   document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
  //   document.getElementById('mobile').focus();
  //   return false;
    
  // }
//   var ps = document.forms["form"]["col"].value; 
//   if (ps == null || ps == "") {
//     document.getElementById("errormsg").innerHTML="please enter your  institution.";
//     return false;
//   }
//   var pr = document.forms["form"]["sub"].value;
//   if (pr == "") {
//     document.getElementById("errormsg").innerHTML="Please Enter your branch";
//     return false;
//   }
//   var x = document.forms["form"]["uname"].value;
//   if (x.length == 0) {
//     document.getElementById("errormsg").innerHTML="Please enter a valid username";
//     return false;
//   }
//   if (x.length < 4) {
//     document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
//     return false;
//   }
//   var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
//       if(!pattern1.test(document.form.uname.value)) 
//       {
//        document.getElementById("errormsg").innerHTML="please enter a valid name.";
//       document.getElementById('uname').focus();
//     return false;
//   }
  
//   var a = document.forms["form"]["pass"].value;
//   if(a == null || a == ""){
//     document.getElementById("errormsg").innerHTML="Password must be filled out";
//     return false;
//   }
//   if(a.length<5 || a.length>15){
//     document.getElementById("errormsg").innerHTML="Passwords must be 5 to 15 characters long.";
//     return false;
//   }


// var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})"); 
//   if(!strongRegex.test(document.form.pass.value)) 
//       {
//         document.getElementById("errormsg").innerHTML="Error: password should contain atleast one uppercase,lowercase ,digit and special characters!";
      
//       form.pass.focus();
//     return false;
//      } 
   
//   var b = document.forms["form"]["cpass"].value;
//   if (a!=b){
//     document.getElementById("errormsg").innerHTML="Passwords must match.";
//     return false;
//   }
//   var cat = document.forms["form"]["cat_id"].value;
//   if(cat==-1)
// {
// document.getElementById("errormsg").innerHTML="plz select.";

// return false;
//   }
  
  
}
</script> 
</head>
<body>


<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action=" " onSubmit="return validateForm()" method="POST">
<fieldset><center>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Registration Form</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
?></div>
    
  </div>
</div>       
   
             <input type="text" name="name" id="name" placeholder="name" onblur="return validateForm()"><br><br>
    <input type="date" name="dob" id="dob"   placeholder="name" onblur="return validateForm()"><br><br>
    <input type="email" name="email" id="name"  placeholder="email" onblur="return validateForm()"><br><br>
    <input type="number" name="mobile" id="mobile"  placeholder="mobile" onblur="return validateForm()"><br><br>
     <input type="text" name="col" id="col" placeholder="Enter your College name" onblur="return validateForm()"><br><br>
     <input type="text" name="sub" id="sub" placeholder="Enter your Subject" onblur="return validateForm()"><br><br>
    <input type="text" name="uname" id="uname" placeholder="username" onblur="return validateForm()"><br><br>
    <input type="password" name="pass" id="pass" placeholder="password" onblur="return validateForm()"><br><br>
    <input type="password" name="cpass" id="cpass" placeholder="confirm"onblur="return validateForm()"><br><br>
    <input type="file" name="file"  id="file"><br><br>
    
            
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" name="submit" value=" Register Now "  style="text-align:center" />
  </div>
</div>

</fieldset></center>
</form>
</div>
</div></div>
</div>

  </div>
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