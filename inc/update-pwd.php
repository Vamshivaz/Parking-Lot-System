<?php
include('inc/dbcon.php');
if(isset($_POST['Reset']))
  {
    $phone=$_SESSION['number'];
    $email=$_SESSION['email'];
    $password=md5($_POST['newpassword']);
$query=mysqli_query($con,"update users set password='$password'  where  email='$email' && phone='$phone' ");
 if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
}
  ?>