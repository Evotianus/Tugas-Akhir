<?php 
	include "koneksi.php";
	
	$image = $_POST['image'];
	$judul = $_POST['judul'];
	$image_pembuat = $_POST['image_pembuat'];
	$nama_pembuat = $_POST['nama_pembuat'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];

	$tanggal = date("d-m-Y");
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha364-Gn5364xqQ1aoWXA+056RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/99d577495c.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail Meeting</title>
</head>
<body>
	

	<div class="col-md-12">
		<div class="detailmeeting">
			<h1>Detail Meeting</h1>
			<img src="./image/<?php echo $image;?>" class="thumbnail">
			<h2><?php echo $judul;?></h2>
		
			<div class="userprofile" style="margin-top: 10px;">
				<img src="./image/<?php echo $image_pembuat;?>"> <span><?php echo $nama_pembuat;?></span>
			</div>

			<div class="deskripsi" style="margin-top: 65px;">
				<h3><?php echo $deskripsi;?></h3>
			</div>
		</div>

		<div class="detailwaktu">
			<div class="kiri column">
				<h3>Tanggal :</h3>
				<h2><?php echo $tanggal;?></h2>
			</div>

			<div class="kanan column">
				<h3>Jam :</h3>
				<h2><?php echo $waktu;?> WIB</h2>
			</div>
		</div>
	</div>

		<div class="buttonjoin text-center">
			<button style="width: 370px;">Join</button>
		</div>
	</div>
</body>
</html>