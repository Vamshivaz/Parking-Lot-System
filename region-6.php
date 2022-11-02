<?php include 'main.php';?>
<?php include 'inc/dbcon.php';?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="inc/css/mystyles.css">
</head>
<body>
<section class="HomeKisii">
<img src="https://www.plasmacomp.com/wp-content/uploads/2016/06/Smart-Parking-Solution-1.jpg" alt="Mountain View" style="width:604px;height:470px">
<section class="Regions">
<p>Parking Lots Status</p>
<p class="status">Red -> Reserved , Yellow -> Available</p>
<p align="center">LANE-6</p>
<!-- Table goes in the document BODY -->
<table class="gridtable">
<?php $street ="LANE-6"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM zones WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($connect,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>

</section>   
</section>               
</body>
</html>
