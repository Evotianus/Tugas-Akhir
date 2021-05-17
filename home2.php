<?php 
session_start();
include "koneksi.php";


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
	<title>Home</title>
</head>
<body>
<?php 
	if(!isset($_SESSION["email"])){
		?>
	<div id="mySidenav" class="sidenav"> <!-- ini sidebar -->
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="Signin.php">
		 	<img src="./image/unknown_user.jpg">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Login
		</a>
		<a onclick="blmlogin()"><i class="fa fa-heart edit1"></i>Konseling</a>
		<a onclick="blmlogin()"><i class="fa fa-newspaper edit1"></i>Artikel</a>
		<a onclick="blmlogin()"><i class="fa fa-comment edit1"></i>Curhat</a>
		<a onclick="blmlogin()"><i class="fa fa-question edit1"></i>Quiz</a>
		<a onclick="blmlogin()"><i class="fa fa-user-friends edit1"></i>Tentang Kami</a>
	</div>

	<div class="atas">
		<i class="fa fa-bars" onclick="openNav()"></i>
		<a href="home.php"><img src="./image/Logo.png"></a>
	</div>
		<?php
	}
	else{
		$email = $_SESSION["email"];
$nama = $_SESSION["nama"];

$sql = "SELECT * FROM tbuser WHERE email='$email'";

$query = mysqli_query($conn, $sql);

$result = mysqli_fetch_array($query);
$profile = $result['profile_image'];
		?>
	<div id="mySidenav" class="sidenav"> <!-- ini sidebar -->
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="user.php">
		 	<img src="./image/<?php echo $profile;?>">
			<i class="fa fa-pen edit"></i>
		</a>
		<a href="konseling.php"><i class="fa fa-heart edit1"></i>Konseling</a>
		<a href="artikel.php"><i class="fa fa-newspaper edit1"></i>Artikel</a>
		<a href="curhat.php"><i class="fa fa-comment edit1"></i>Curhat</a>
		<a href="quiz.php"><i class="fa fa-question edit1"></i>Quiz</a>
		<a href="about.php"><i class="fa fa-user-friends edit1"></i>Tentang Kami</a>
		<a href="logout.php"><i class="fa fa-sign-out-alt edit1"></i>Log out</a>
	</div>

	<div class="atas">
		<i class="fa fa-bars" onclick="openNav()"></i>
		<a href="home.php"><img src="./image/Logo.png"></a>
	</div>
		<?php
	}
	?>

	<div class="atass text-center">
		<h1>Hello, <?php echo $nama;?> !</h1>
	</div>

	<div class="isi text-center">
		<div class="motivasi">
			<h2>Dialy Motivation</h2>
			<h3 style="margin-top: 20px; width: 400px;">Don't compare yourself to other, <br> because you are perfect just the way you are <3</h3>
			<h3 style="font-weight: 700; font-style: italic;">-Unknown</h3>
			<img src="./image/motivasi.png">
		</div>

		<div class="adaapa">
			<h2>Ada Konseling Apa Ya Hari Ini?</h2>
			<div class="isikonseling">
				<div class="isi2 column">
					<img src="./image/thumbnail.png">
					<h3>Gimana cara menjawab quiz dengan cepat</h3>
					<h3 style="font-weight: 900; color: #03045E;">TODAY AT 13:00 WIB</h3>
				</div>

				<div class="isi2 column">
					<img src="./image/thumbnail.png">
					<h3>Gimana cara menjawab quiz dengan cepat</h3>
					<h3 style="font-weight: 900; color: #03045E;">TODAY AT 13:00 WIB</h3>
				</div>

				<div class="isi2 column">
					<img src="./image/thumbnail.png">
					<h3>Gimana cara menjawab quiz dengan cepat</h3>
					<h3 style="font-weight: 900; color: #03045E;">TODAY AT 13:00 WIB</h3>
				</div>
			</div>
		</div>
	</div>

	<div class="quiz text-center">
		<h2 style="margin-top: 30px; margin-bottom: 20px;">Cobain Quiz Kita!</h2>
			<div class="areaquiz" style="margin-bottom: 30px;">
				<h5>Apa Kegiatan yang cocok dengan mu?</h5>
				<h4>15 pertanyaan</h4> 
				<button class="standartbutton">Play</button>
			</div>

			<div class="areaquiz">
				<h5>Apa Kegiatan yang cocok dengan mu?</h5>
				<h4>15 pertanyaan</h4> 
				<button class="standartbutton">Play</button>
			</div>
	</div>



</body>
</html>