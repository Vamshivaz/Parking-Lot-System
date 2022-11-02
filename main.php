
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Parking Lot system</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p><center>PARKING LOT SYSTEM</center></p>
</section>
    <nav>
      <ul class="nav">
       <li><a href="index.php" class="icon home"><span>Home</span></a></li> 
        <li class="dropdown">
          <a href="">Parking Lanes</a>
          <ul class="large">
            <li><a href="region-1.php">Lane-1</a></li>
            <li><a href="region-2.php">Lane-2 </a></li>
            <li><a href="region-3.php">Lane-3</a></li>
            <li><a href="region-4.php">Lane-4</a></li>
			<li><a href="region-5.php">Lane-5</a></li>
			<li><a href="region-6.php">Lane-6</a></li>
          </ul>
        </li>
		 
		<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
   {
   echo  "<li><a href=\"your-car.php\">Book</a></li>";
   echo  "<li><a href=\"unbook.php\">Unbook</a></li>";
   }
   else
   {
    echo "<li><a href=\"admin/index.php\">Admin Panel</a></li>";
   }
    ?>
     	
       
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