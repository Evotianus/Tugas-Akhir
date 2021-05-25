<?php 
session_start();

include "koneksi.php";

$profile_image = $_SESSION["profile_image"];
$nama_pembuat = $_SESSION["nama"];
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
	<title>Buat MeetingMu</title>
</head>
<body>
	<div class="buatmeeting text-center col-md-12">
		<h1 style="margin-top: 30px; margin-bottom: 30px;">Buat Meeting Mu!</h1>


		<div class="form1">
			<form action="buatmeetingaction.php" method="POST">
				<div class="thumbnail">
					<p>Masukan thumbnail meeting</p>
					<input type="file" name="image">
				</div>

				<input type="hidden" value="<?php echo $profile_image;?>" name="profile_image">
				<input type="hidden" value="<?php echo $nama_pembuat;?>" name="nama_pembuat">

				<p>Judul Meeting</p>
				<input type="text" name="judul">

				<p style="margin-bottom: 50px;">Detail Meeting</p>
				<input type="text" name="deskripsi">

				<input style="border-radius: 5px; margin-top: 20px; width: 100%; margin-bottom: 20px; border: 1px solid black; height: 40px;" type="date" placeholder="Tanggal" name="tanggal">

				<p>Waktu</p>
				<input type="time" style="width: 150px;" name="waktu">

				<p>Link Meeting</p>
				<input type="text" name="link_meeting">

				<div class="buttonjoin text-center">
					<button style="width: 400px;">Buat Meeting</button>
				</div>
			</form>
		</div>

	</div>

</body>
</html>