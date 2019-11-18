<?php
include("co.php");
  include 'headers.html';
  session_start();

  $loginid=$_SESSION['loginid'];


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
  input[type=text],[type=password],select,[type=date],[type=number],[type=file]{
   
    padding: 12px ;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  width:40%;
   margin-left:;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 12px;
    margin-top:10px;
  margin-border: none;
    border-radius: 8px;
  width:20%;   
  margin-left: 8%;
}
.ten
{
  background-color:blue;
}
</style>
 <script>
function validateForm() {
  var y = document.forms["form"]["tenins"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="please enter your tenth institution.";
    return false;
  }
if ((y.length < 3) || (y.length > 30))
  {
    document.getElementById("errormsg").innerHTML="Your Character must be 4 to 15 Character.";
    
    document.getElementById('tenins').focus();
     return false;
   }

  
    var pattern1 = new RegExp("^[a-zA-Z ]*$"); 
      if(!pattern1.test(document.form.tenins.value)) 
      {
       document.getElementById("errormsg").innerHTML="please enter School name.";
      document.getElementById('tenins').focus();
    return false;
  }

  var tr = document.forms["form"]["tenper"].value;
  if (tr == "") {
    document.getElementById("errormsg").innerHTML="Please select your percentage";
    return false;
  }
  
  var tn = document.forms["form"]["tenyop"].value;
  if (tn=="") {
    document.getElementById("errormsg").innerHTML="Please select your Year Of Pass";
    return false;
  }
  var ps = document.forms["form"]["plusins"].value; 
  if (ps == null || ps == "") {
    document.getElementById("errormsg").innerHTML="please enter your plustwo institution.";
    return false;
  }
  var pr = document.forms["form"]["plusper"].value;
  if (pr == "") {
    document.getElementById("errormsg").innerHTML="Please select your percentage";
    return false;
  }
  
  var pp = document.forms["form"]["plusyop"].value;
  if (pp=="") {
    document.getElementById("errormsg").innerHTML="Please enter your Year Of Pass";
    return false;
  }
  var us = document.forms["form"]["ugins"].value; 
  if (us == null || us == "") {
    document.getElementById("errormsg").innerHTML="please enter your Degree institution.";
    return false;
  }
  var ur = document.forms["form"]["ugper"].value;
  if (ur == "") {
    document.getElementById("errormsg").innerHTML="Please enter your percentage";
    return false;
  }
  
  var up = document.forms["form"]["ugyop"].value;
  if (up=="") {
    document.getElementById("errormsg").innerHTML="Please enter your Year Of Pass";
    return false;
  }
  
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
</div>       <div class="ten">
  <h2>Tenth Class</h2>
             </div>
   
             <input type="text" class="form-control" id="tenins" name="tenins" placeholder="Enter your sslc institution" onblur="return validateForm()"><br>         
                <input type="number" class="form-control" id="tenper" name="tenper" placeholder="Enter your sslc mark in percentage" onblur="return validateForm()" > <br>
              <input type="number" class="form-control" id="tenyop" name="tenyop" placeholder="Year of pass"
              onblur="return validateForm()" > <br>

              <input type="file" class="form-control" id="tenfile" name="tenfile" onblur="return validateForm()">    



              <div class="ten">
  <h2>Plus Two</h2>
             </div>
                <input type="text" class="form-control" id="plusins"  name="plusins" placeholder ="Enter your plus two institution" onblur="return validateForm()"><br><br>    
      <input type="number" class="form-control" id="plusper" name="plusper" placeholder="Enter your plus two mark in percentage" onblur="return validateForm()" ><br><br>    
      <input type="number" class="form-control" id="plusyop" name="plusyop" placeholder="Year of pass" onblur="return validateForm()" ><br><br>    
      <input type="file" class="form-control" id="plusfile" name="plusfile" onblur="return validateForm()" >
                
            
            <div class="ten">
  <h2>Graduation</h2>
             </div>
                  <input type="text" class="form-control"  name="ugins"   placeholder ="Enter your Degree institution" onblur="return validateForm()">
            <br><br>      
           
            <input type="number" class="form-control" id="ugper" name="ugper" placeholder="Enter your Degree in percentage" onblur="return validateForm()" >
            <br><br>
           
                      
             <input type="number" class="form-control" id="ugyop" name="ugyop"  placeholder="Year of pass" onblur="return validateForm()">
           
            <br><br>
             
              
           
            <input type="file" class="form-control" id="ugfile"  name="ugfile" onblur="return validateForm()">
            <br>
            
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" name="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" />
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
  


    $tenins = $_POST['tenins'];
    
    $tenper = $_POST['tenper'];
    
    $tenyop= $_POST['tenyop'];
    $plusins = $_POST['plusins'];
    
    $plusper = $_POST['plusper'];
    
    $plusyop= $_POST['plusyop'];
    $ugins = $_POST['ugins'];
    
    $ugper = $_POST['ugper'];
    
    $ugyop= $_POST['ugyop'];
    
    
         
    
    
 


  $dir='photo/';
$target_file = $dir . basename($_FILES["ugfile"]["name"]);
move_uploaded_file($_FILES['ugfile']['tmp_name'], $target_file);
$tarfile = $dir . basename($_FILES["plusfile"]["name"]);
move_uploaded_file($_FILES['plusfile']['tmp_name'], $tarfile);
$targetfile = $dir . basename($_FILES["tenfile"]["name"]);
move_uploaded_file($_FILES['tenfile']['tmp_name'], $targetfile);
      

$sql = "INSERT INTO book(`loginid`,`tenins`,`tenper`, `tenyop`,`tenfile`)VALUES 
 ('".$loginid."','".$tenins."','".$tenper."','".$tenyop."','".$target_file."')" ;
if(mysqli_query($con, $sql)) {
  }


$sqls = "INSERT INTO book2(`loginid`,`plusins`,`plusper`,`plusyop`,`plusfile`)VALUES('".$loginid."','".$plusins."','".$plusper."','".$plusyop."','".$targetfile."')";
if(mysqli_query($con, $sqls)) {
  }
  $sq = "INSERT INTO book3(`loginid`,`ugins`,`ugper`,`ugyop`,`ugfile`)VALUES('".$loginid."','".$ugins."','".$ugper."','".$ugyop."','".$tarfile."')";
if(mysqli_query($con, $sq)) {
  }
}
  ?> 