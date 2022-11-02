<?php
session_start();
include('inc/dbcon.php');
if(isset($_POST['submit']))
  {
    $number=$_POST['number'];
    $password=$_POST['newpassword'];

   $query=mysqli_query($connect,"update users set password='$password'  where  phone='$number' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
else
{
echo "<script>alert('password does not chnage');</script>";
  }
}
  ?>