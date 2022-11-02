
<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">

</head>

<form class="box login" action="process-book-1.php" method="post">
<section class="Homekisii">
	<fieldset class="boxBody">
	<label><strong>Describe your Vehicle</strong></label>
	<hr />
	  <label>Model</label>
	  <input type="text" tabindex="1" name="model" placeholder="eg. Toyota Allion" required>
	  <label>Vehicle Type</label>
	   <select name="vehicle" class="cjComboBox" >
			<option value="volvo">TWO WHEELER</option>
			<option value="saab">FOUR WHEELER</option>
			</select>
	</fieldset>
</section>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed" tabindex="4">
	  <?php
	  //Values
	  ?>
	</footer>
</form>
</html>
