<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();		
}


require('inc\dbcon.php');

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];
$sql=mysqli_query($connection,"SELECT * FROM users WHERE email='$email' and password='$password'");
// Mysql_num_row is counting table row
$count=mysqli_num_rows($sql);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
//Name variable
while($row = mysqli_fetch_assoc($sql))
{
   $name = $row["name"];
   $level= $row["level"];
   //
   if ($level == 0){
  header("location:access-denied.php");
    exit;
   }
  
} 
// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
session_start();
// Set session variables
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
$_SESSION["name"] = $name;
//echo "Session variables are set.";
header("location:admin-welcom.php");
}
else {
echo "Wrong Username or Password";
}
?>