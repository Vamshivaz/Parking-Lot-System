<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$connection= mysqli_connect("localhost", "root", "", "parkings");
	$email=$_SESSION['email'];
	$query = mysqli_query($connection, "select * from zones where status='RESERVED' AND email='$email'");
	$rows = mysqli_num_rows($query);
	//echo $rows;
	$row=mysqli_fetch_array($query);
	//if ($rows == 1) {
	$date=date('d-m-y h:i:s A');
	$sql = "UPDATE zones SET status = 'UNBOOKED',d2 ='$date' WHERE email = '$email'";
	mysqli_query($connection, $sql);
	 header("Location: ../success_unbook.php");
	//}
		
}