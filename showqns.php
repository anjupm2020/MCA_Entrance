<?php
include('co.php') ;
include 'headers.html';
session_start();
$loginid = $_SESSION['loginid'];
$type = $_SESSION['type'];
$q = $_SESSION['q'];
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
.one
{
  margin-top:120px;
  width:60%;
  height:50%;
  margin-left:350px;
background-color:;

}
.button {

  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.qno
{
  font-size:22px;
  margin-top:20px;
}
.out
{
  width:100%;
  background-color:#ccc11e;
  padding:15px;
  padding-left:600px;
  margin-top:110px; 

}
</style>
<title>gg</title>
</head>
<body bgcolor="">



<?php
$sql = "SELECT  * FROM `question` WHERE cat_id=2" ;
$result = mysqli_query($con, $sql);
 
$n=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)) {
          $qno=$row['qno']; 
          $query = "SELECT * FROM `answers` WHERE loginid='$loginid' AND qno='$qno' AND cat_id='$type' ";
          $res = mysqli_query($con, $query);
          if(mysqli_num_rows($res)==0) {
           
      ?>
            <div class="one">
            <form action="store_result.php" method="post">
            <div class="qno">
            <input type="hidden" name="qno" value="<?php echo $row['qno'];?>">
            <?php echo  $q; ?>.
            <?php echo $row["qn"];?> 
            </div>  <br />
          <label class="container">
          <input type="radio"  value="<?php echo $row["o1"];?>" name="userans" > <?php echo $row["o1"]?>
          <span class="checkmark"></span></label>
          <label class="container">
          <input type="radio"  value="<?php echo $row["o2"];?>"  name="userans"> <?php echo $row["o2"]?>
          <span class="checkmark"></span></label>
          <label class="container">
          <input type="radio"  value="<?php echo $row["o3"];?>"  name="userans"> <?php echo $row["o3"]?>
          <span class="checkmark"></span></label>
          <label class="container">
          <input type="radio"  value="<?php echo $row["o4"];?>"  name="userans"> <?php echo $row["o4"]?>
          <span class="checkmark"></span></label>

<center>
           <!-- <input type="submit" name="submit" value="next"> -->
           <div>

                   <button class="button" type="submit" name="submit"><span>Save and Continue</span></button> 
                 
              
                
              </form>
             </div>
           
           </center>
           
            
            </div>
         <?php
         break;
           }
           else if(mysqli_num_rows($res)!=$q)
           {
            continue;
           }
}
/* echo "<script>alert('Test Finished');
         window.location='selectbox.php'</script>"; */
                 
     

 ;
?>
<div class="out">

  <?php echo $q ." "."Out of 10 " ; ?>
</div>
</body>
</html>



 <?php
 if($q>9)
 {
  header("Location:thanku.php");
 }
?>


  