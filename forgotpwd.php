<?php
session_start();
include('inc/dbcon.php');
if(isset($_POST['submit']))
  {
    $number=$_POST['number'];

        $query=mysqli_query($connect,"select ID from users where  phone='$number'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['phone']=$number;
     header('location:reset-password.php');
    }
    else{
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>
   ?>
<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/gov.jpg" alt="Mountain View" style="width:954px;height:470px">
<section class="account">
  <h1>Reset</h1>
<hr>
  <form action="#" method="post" name="submit">
     <input type="text" id="FullName" name="number"placeholder="Your number" maxlength="10" required />
	 <input type="submit" id="LogIn" value="Reset" name="submit">
	 </form>
	 <p><a href="signup.php" class="Link">Or Sign Up</a></p>
</section>
</section>
<section class="kisii-bottom">
<p>Safe Parking, whenever you are in Kisii</p>
</section>
</body>
</html>
