<?php 
session_start();
include "koneksi.php";

$no = $_SESSION["no"];
$emailLama = $_SESSION["email"];
$passwordLama = $_SESSION["password"];

$sql = "SELECT * FROM tbuser WHERE no='$no'";

$query = mysqli_query($conn, $sql);

$result = mysqli_fetch_array($query);
$profil_lama = $result['profile_image'];
$nama_lama = $result['nama'];
$email_lama = $result['email'];
$password_lama = $result['password'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/99d577495c.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
</head>
<body>
	<div class="isi1 text-center">
		<form action="userupdate.php" method="POST">
			<div class="image text-center">
				<img src="./image/<?php echo $profil_lama;?>" id="image_profile">
				<i><label class="fa fa-camera" for="upload-file"></label></i><input id="upload-file" name="image_profile" type="file" style="display: none"
				onchange="UbhImg(this.value)">
			</div>
			<div class="form1">
				<input type="hidden" value="<?php echo $_SESSION["no"];?>" name="no">
				<p>Nama</p>
				<input type="text" name="nama" value="<?php echo $nama_lama;?>">

				<p>E-mail</p>
				<input type="email" name="email" value="<?php echo $email_lama;?>">

				<p>Password</p>
				<input type="text" name="password" value="<?php echo $password_lama;?>">
			</div>
			<div class="button1 text-center">
				<button>Simpan</button>
			</div>
		</form>
	</div>


<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}

	function UbhImg(img) {
		var imgBaru = img.replace(/^C:\\fakepath\\/, "");

		document.getElementById('image_profile').src = "./image/" + imgBaru;
	}
</script>
</body>
</html>