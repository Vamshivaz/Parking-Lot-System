<?php

	include('inc\dbcon.php');
	include('inc\insert.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['password'])){
        $name = $_POST['name'];
		$email = $_POST['email'];
        $password = $_POST['password'];
		 $phone = $_POST['phone'];
		 $plateno=$_POST['vehiclenumber'];
		 $table_name = 'users';
	//check existence
	$sql=mysqli_query($connect,"SELECT * FROM users WHERE email='$email'");
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($sql);
		// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
	echo "User exists, please use log in.";
	exit;
	}
	else
	{
	$form_data = array(
	    'name' =>  $name ,
		'password' => $password,
		'email' => $email,
		'phone' => $phone,
		'plate_no' => $plateno,
	);
	$connection->multi_query( dbRowInsert($table_name, $form_data));
	$connection->close();
}
}
        
        if($sql){
           //REDIRECT
		   header('location:success-sign-up.php');
exit;
        }
    ?>