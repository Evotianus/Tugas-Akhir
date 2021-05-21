<?php 
session_start();
include "koneksi.php";
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

	<div class="atass text-center">
		<h1>Kami ada disini <br> Untuk mu</h1>
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
		<?php
			if($profile == null) {
		?>
				<img src="./image/unknown_user.jpg" alt="">
		<?php
			}
			else {
		?>
		 		<img src="./image/<?php echo $profile;?>" alt="./image/unknown_user.jpg">
		<?php
			}
		?>
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

	<div class="atass text-center">
		<h1>Hello, <?php echo $nama;?></h1>
	</div>
		<?php
	}
	?>

	
	<div class="introduction col-md-12">
		<div class="katakata column" style="float: left;">
			<h2>Apa itu Advoice?</h2>
			<h4 style="margin-left: 5px;">Advoice adalah sebuah app yang diciptakan untuk orang yang sedang kehilangan motivasi atau harapan untuk cita citanya sehingga kami dapat membantu menjawabnya</h4>
		</div>

		<div class="imageintro column">
			<img src="./image/intro.png">
		</div>
	</div>

	<div class="fitur">
		<h2 class="text-center" style="margin-top: 50px;">Fitur Apa Saja Yang Disediakan?</h2>

		<div class="detailfitur col-md-12 ">
			<div class="imageintro column">
				<img src="./image/konseling.png">
			</div>

			<div class="katakata column">
				<h2 style="text-align: right;">Konseling</h2>
				<h4 style="margin-right: 5px; text-align: right;">Advoice adalah sebuah app yang diciptakan untuk orang yang sedang kehilangan motivasi atau harapan untuk cita citanya sehingga kami dapat membantu menjawabnya</h4>
			</div>
		</div>

		<div class="detailfitur col-md-12 ">
			<div class="katakata column">
				<h2>Curhat</h2>
				<h4 style="margin-left: 5px;">Kami menyediakan fitur curhat agar anda dapat secara anonymous menceritakan pengalaman dan masalah anda ke pengguna lain dan merespon pada pesan mereka juga.</h4>
			</div>

			<div class="imageintro column">
				<img src="./image/curhat.png">
			</div>
		</div>

		<div class="detailfitur col-md-12 ">
			<div class="imageintro column">
				<img src="./image/quiz.png">
			</div>

			<div class="katakata column">
				<h2 style="text-align: right;">Quiz</h2>
				<h4 style="margin-right: 5px; text-align: right;">Kami menyediakan fitur quiz ini untuk menjawab pertanyaan-pertanyaan agar anda memiliki pandangan yang lebih jelas mengenai diri anda.</h4>
			</div>
		</div>
	</div>

	<?php 
	if(!isset($_SESSION["email"])){
		?>
		<div class="footer text-center">
		<h2>Tunggu Apa Lagi?<br> Ayo Bergabung Bersama Kami</h2>
		<a href="Signin.php"><button class="lightbutton">SIGN IN</button></a>
		<a href="Signup.php"><button class="standartbutton">SIGN UP</button></a>
	</div>
	<?php
	}
	?>
	

<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}

	function blmlogin() {
		alert("Tolong Login Terlebih Dahulu");
	}
</script>
</body>
</html>