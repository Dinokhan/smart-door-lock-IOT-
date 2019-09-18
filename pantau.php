<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
</head>
<body>
	<div class="jumbotron text-center">
		<h1 class="display-4">REALTIME WAKTU MASUK KE RUMAH</h1><br><br>
		<a href="delete.php" class="btn btn-danger float-right my-4"  onclick="return confirm('Apakah anda ingin menghapus !!!')">Hapus Data</a>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<!-- <th scope="col">#</th> -->
					<th scope="col">NO</th>
					<th scope="col">Aksi</th>
					<th scope="col">Waktu</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include "koneksi.php";

				if (isset($_POST['cari'])){
					$cari=$_POST['cari'];
					$pintu  = mysqli_query($conn, "SELECT * FROM tanggal where user like '%$cari%'") or die(mysqli_error());  

				}
				else {
					$pintu  = mysqli_query($conn, "SELECT * FROM tanggal ") or die(mysqli_error());
				}

				// $tampil=mysqli_query($koneksi, "SELECT * FROM buku");

				$no=1;
				while ($r=mysqli_fetch_array($pintu)){
					?>
					<tr>
						<!-- <th scope="row">1</th> -->
						<th><?php echo "$no"; ?></th>
						<td><?php echo "$r[user]"; ?></td>
						<td><?php echo "$r[tanggal]"; ?></td>
						<?php $no=$no+1;}?>
					</tr>

				</tbody>
			</div>
		</table>
	</div>
</body>
</html>