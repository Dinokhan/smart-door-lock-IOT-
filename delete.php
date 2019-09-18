<?php
require_once("koneksi.php");

// $id = $_GET['id'];
$query = "DELETE FROM tanggal "; // query hapus data

if(mysqli_query($conn, $query)){
    header("Location: pantau.php"); // redirect ke index.php
}else{
	echo "Hapus data gagal";
}
?>