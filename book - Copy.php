<?php
  include("co.php");
  include 'headers.html';
  session_start();

  $loginid=$_SESSION['loginid'];

?>

<html>
  <head>
  <title>Registration Form</title>
  <style type="text/css">
    body{
  background-color: White
    ;
}
h1{
  color:purple;
  text-align:center;
}
.full
{
  width:60%;
  margin-left:200px;
}
.ten
{
  background-color:blue;
}
input[type=text],[type=password],[type=date],[type=number],[type=file], select{
  width: 50%;
  padding: 12px;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:green ;
  color: white;
  padding: 12px 20px;
  
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
  </style>
  </head>
  <body>

     <h1><u>STUDENT REGISTRATION FORM</u></h1>
     <form method="post" action="" enctype="multipart/form-data">
   
      <center>
    <div class="full">

              <div class="ten">
  <h2>Tenth Class</h2>
             </div>
      
             
             <input type="text" class="form-control" id="tenins" name="tenins" placeholder="Enter  Institution Name" required="Enter  Institution Name"><br>         
                <input type="number" class="form-control" id="tenper" name="tenper" placeholder="Enter Mark in Percentage" required="Enter  Percentage" > <br>
              <input type="number" class="form-control" id="tenyop" name="tenyop" placeholder="Enter Year Of Pass" required="Enter Year of Pass" > <br>
<h4>Upload Certificate</h4>
              <input type="file" class="form-control" id="tenfile" name="tenfile" required="please insert your Certificate">    



              <div class="ten">
  <h2>Plus Two</h2>
             </div>
                <input type="text" class="form-control" id="plusins"  name="plusins" placeholder ="Enter plus two Institution" required="Enter  Institution Name"><br>
                 <input type="number" class="form-control" id="plusper" name="plusper" placeholder="Enter Mark in Percentage" required="Enter  Percentage" ><br>
                <input type="number" class="form-control" id="plusyop" name="plusyop" placeholder="Enter Year of Pass" required="Enter Year of Pass" ><br>
                <h4>Upload Certificate</h4>
                  <input type="file" class="form-control" id="plusfile" name="plusfile" required="please insert your Certificate">
                
            
          <div class="ten">
  <h2>Graduation</h2>
             </div>
                  <input type="text" class="form-control"  name="ugins"  placeholder= "Enter Degree Institution" required="Enter  Institution Name">
            <br><br>      
           
            <input type="number" class="form-control" id="ugper" name="ugper" placeholder="Enter Degree Percentage" required="Enter  Percentage">
            <br><br>
           
                      
             <input type="number" class="form-control" id="ugyop" name="ugyop" placeholder="Enter Degree Year Of Pass" required="Enter Year of Pass">
           
            <br><br>
             
              
           <h4>Upload Certificate</h4>
            <input type="file" class="form-control" id="ugfile"  name="ugfile" required="please insert your Certificate">
            <br>
            
            
       
   <input type="submit" name="submit" value="submit">
     
         

   </div></center>
    </form>
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
      
//       $sql="INSERT INTO `book` (`tenfile`,`plusfile`,`ugfile`) VALUES ('$targetfile','$tarfile','$target_file')";
//       $ch=mysqli_query($con,$sql);
//      if($ch)

// {
  
  
// }

$sql = "INSERT INTO book(`loginid`,`tenins`,`tenper`, `tenyop`,`tenfile`)VALUES 
 ('".$loginid."','".$tenins."','".$tenper."','".$tenyop."','".$target_file."')" ;
if(mysqli_query($con, $sql)) {
  }


$sqls = "INSERT INTO book2(`loginid`,`plusins`,`plusper`,`plusyop`,`plusfile`)VALUES('".$loginid."','".$plusins."','".$plusper."','".$plusyop."','".$targetfile."')";
if(mysqli_query($con, $sqls)) {
  }
  $sq = "INSERT INTO book3(`loginid`,`ugins`,`ugper`,`ugyop`,`ugfile`)VALUES('".$loginid."','".$ugins."','".$ugper."','".$ugyop."','".$tarfile."')";
if(mysqli_query($con, $sq)) {
  echo "<script> 
alert('saved');

window.location.href='logs.php';
</script>"; 
  }
}
  ?>