<?php
include "koneksi.php";
$user = $_POST['user'];
$tanggal = date("Y-m-d H:i:s");

$sql = "INSERT INTO tanggal VALUES('','$user','$tanggal')";
mysqli_query($conn,$sql);

if ($user =='buka_pintu') {
	header('location:http://169.254.101.211/?LEDON');
	
}else{
	header('location:http://169.254.101.211/?LEDOFF');
}
?>

