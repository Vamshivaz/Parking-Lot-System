<?php
session_start();
include('inc/dbcon.php');
if(isset($_POST['submit']))
  {
    $number=$_SESSION['phone'];
    $password=$_POST['newpassword'];

   $query=mysqli_query($connect,"update users set password='$password'  where  phone='$number' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
}
  ?>
<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 
</script>
</head>
<body>
<section class="HomeKisii">
<img src="img/gov.jpg" alt="Mountain View" style="width:954px;height:470px">
<section class="account">
  <h1>Recover password</h1>
<hr>
  <form action="" method="post" name="changepassword" onsubmit= "return checkpass();">
     <input type="password" id="FullName" name="newpassword" placeholder="new password" required />
     <input type="password" id="FullName" name="confirmpassword" placeholder="Confirm Your Password"  required />
	 <input type="submit" id="LogIn" value="Reset" name="submit">
	 </form>
</section>
</section>
</body>
</html>

