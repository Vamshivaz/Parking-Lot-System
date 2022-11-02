<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'parkings'; 
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parkings";
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$connect=mysqli_connect("localhost", "root", "", "parkings") or die(mysqli_error());
?>