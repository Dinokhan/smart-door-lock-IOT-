<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST ['password'];

$login = mysqli_query($conn, "SELECT * FROM user where username = '$username' AND password = '$password'");
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
	session_start();
	//$_SESSION['id'] = $r['id_users'];
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	
	$sid_lama = session_id();
	session_regenerate_id();
	$sid_baru = session_id();
	mysqli_query($conn, "UPDATE user SET id_sission = '$sid_baru' where username = '$username'");
	echo "<script>
	alert('selamat Datang $r[username]');
	document.location.href = 'home.php';
	</script>";
}else{
	echo "<script>
	alert('username/password Salah');
	document.location.href = 'index.php';
	</script>";

}
?>