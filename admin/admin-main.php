
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>parking lot system.</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p>PARKING LOT SYSTEM</p>
</section>
    <nav>
      <ul class="nav">
        <li><a href="index.php" class="icon home"><span>Home</span></a></li>
		 <li><a href="clients.php">Users info</a></li>  
	<li><a href="bookings.php">Bookings</a></li> 
      </ul>
    </nav>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
	

  </header>
</section>
</body>

</html>