<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
</head>
<body>	
	
	<div class="jumbotron text-center">
		<img src="bukapintu.jpg"><br><br><br><br>
		<h1 class="display-4">IOT SMART DOOR LOCKS</h1><br>
		<p class="lead">mempermudah anda dalam melakukan pemantauan Rumah anda!!.</p>
		<hr class="my-4"><br>
		<p>Pastikan anda adalah satu dari pemillik rumah ini.</p>
		<?php
		$date = Date("Y-m-d H:i:s");
		Echo "Tanggal dan jam sekarang adalah $date <br>";
		?><br><br>
		<form method="post" action="proses.php">
			<!-- <a class="btn btn-primary btn-lg" href="http://169.254.101.211/?LEDON" role="button">Buka Pintu</a> -->
			<button class="btn btn-primary btn-lg" type="submit" value="buka_pintu" name="user">Buka Pintu</button>
			<button class="btn btn-danger btn-lg" type="submit" value="tutup_pintu" name="user">Tutup Pintu</button>
			<a class="btn btn-success btn-lg" href="pantau.php" role="button">Pantau Rumah</a>
			<a class="btn btn-warning btn-lg" href="logout.php" role="button">Logout</a>
			
		</form>
		<!-- <a class="btn btn-danger btn-lg" href="http://169.254.101.211/?LEDOFF" role="button">Tutup Pintu</a> -->
		<!-- <a class="btn btn-warning btn-lg" href="logout.php" role="button">Logout</a> -->
	</div>

	<!-- modal tampilkan hasil database -->

	<!-- modal tampilkan hasil database -->

	<script type="text/javascript" src="css/bootstrap.min.js"></script>
	<script type="text/javascript" src="css/bootstrap.js"></script>
	<script type="text/javascript" src="css/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="css/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="css/bootstrap.min.js"></script>

</body>
</html>