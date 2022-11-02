<?php
session_start();
if( isset( $_SESSION['email'] ) )
     {
	 }
	else{
	 exit;
  }
   ?>
<?php include 'admin-main.php';?>
<?php 
include('inc/dbcon.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link rel="stylesheet" type="text/css" href="css/mystyles.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/dt_bootstrap.css">

</head>
<body>
<section class="HomeKisii">
<div class="cont">
<br>
<br>
<p><center><h3 style="width:660px;background:white;padding:5px;margin:auto;color:purple;"><u>User Details</u></h2></center></P>
<form action="deleteclients.php" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
						<th></th>
						<th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
						<th>Vehicle Number</th>
                                   <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
								$no=0;
							$query=mysqli_query($connect,"select * from users where level=''")or die(mysqli_error());
							while($row=mysqli_fetch_array($query)){
							$id=$row['id'];
							$no=$no+1;
							?>
                                
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
										 <td><?php echo $no; ?></td>
										 <td><?php echo $row['name'] ?></td>
                                         <td><?php echo $row['email'] ?></td>
                                         <td><?php echo $row['phone'] ?></td>
                                         <td><?php echo $row['plate_no'] ?></td>
										 <td><?php echo ("<button class=\"btn btn-success\"  name=\"submit_multi\" type=\"submit\" value=$id>
Delete
</button>") ?></td>
                                </tr>
                         <?php  } ?>
						 
                            </tbody>
                        </table>
						
</form>



</div>


</section>
</body>
</html>
