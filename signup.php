<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="img/gov.jpg" alt="Mountain View" style="width:954px;height:470px">
<section class="account">
  <h1>Sign Up</h1>
<hr>
  <form action="process-sign-up.php" method="post">
	 <input type="text" id="FullName" name="name" placeholder="Your Name" maxlength="31" required pattern="(^[a-zA-Z]+$)" required />
      <input type="text" id="FullName" name="email"placeholder="Your Email" maxlength="31" required pattern="(\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*)" required />
	 <input type="password" id="FullName" name="password" placeholder="Your Password" maxlength="10"required />
	 <input type="text" name="phone"  id="FullName" placeholder="Phone number" required pattern="[6-9]{1}[0-9]{9}" title="phone number" maxlength="10"/> 
	 <input type="text" name="vehiclenumber" id="FullName" placeholder=" Your vehicle plate number" maxlength="10" required pattern="[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{4}" required/>
	 <input type="submit" id="LogIn" value="Sign Up">
	 </form>
	 <p><a href="index.php" class="Link">Or Log In</a></p>
</section>
</section>
</body>
</html>
