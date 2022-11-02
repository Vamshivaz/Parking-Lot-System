<?php
	require('inc\dbcon.php');
	session_start();
     $email = $_SESSION["email"];
	 $model = $_SESSION["model"];
	  $vehicle = $_SESSION["vehicle"];
	  $status="RESERVED";
	  $plateno = $_SESSION["plateno"];
	  $plot = $_SESSION["plot"];
	  $street = $_SESSION["street"];
	    $from = $_SESSION["from"];
		 $to = $_SESSION["to"];	
			/*CHECK IF RESERVED */
			
$sql="SELECT * FROM zones WHERE street='$street' and plot='$plot' and status='RESERVED'";
$result=mysqli_query($connect,$sql);


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If

if($count==1){
 header('location:error-book.php');
}
else
{

        $query = "INSERT INTO `zones` (status, email, model, vehicle,street,plot,platenumber,d1,d2) VALUES ('$status', '$email', '$model', '$vehicle' , '$street', '$plot', '$plateno','$from','$to')";
        $result = mysqli_query($connect,$query);
		
		$var = $_SESSION["from"];
$date = str_replace('/', '.', $var);
echo date('Y.m.d', strtotime($date));
		if($result){
           //REDIRECT
		   header('location:success-book.php');
		   
exit;
        }
}
    ?>