<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/99d577495c.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Quiz</title>
</head>
<body>
	<div id="mySidenav" class="sidenav"> <!-- ini sidebar -->
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a href="user.php">
		 	<img src="./image/profile.jpg">
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
		<img src="./image/Logo.png">
	</div>

	<div class="judul text-center">
		<h1 style="margin-top: 30px;">Hasil Quiz</h1>
	</div>

	<p>buat grafik</p>

	<div class="hasilquiz text-center">
		<h2>Rupanya kamu orangnya "Seni" banget nih!</h2>
		<p>Bakat anda terdapat di bidang seni. Anda adalah seseorang yang artistik dan kreatif dalam karya anda. Anda tidak mengandalkan kemampuan praktek mengikuti contoh yang benar tetapi anda mengandalkan imajinasi dan kemampuan berpikir anda. Kelebihan dalam bakat seni merupakan bakat yang unik, maka dari itu kembangkanlah kemampuan anda lebih lanjut!  </p>
	</div>

	<div class="quiz text-center">
		<h1 style="margin-top: 30px; margin-bottom: 20px;">Coba quiz lainnya</h1>
			<div class="areaquiz" style="margin-bottom: 30px;">
				<h5>Apa Kegiatan yang cocok dengan mu?</h5>
				<h4>15 pertanyaan</h4> 
				<button class="standartbutton">Play</button>
			</div>

			<div class="areaquiz" style="margin-bottom: 30px;">
				<h5>Apa Kegiatan yang cocok dengan mu?</h5>
				<h4>15 pertanyaan</h4> 
				<button class="standartbutton">Play</button>
			</div>

			<div class="areaquiz" style="margin-bottom: 30px;">
				<h5>Apa Kegiatan yang cocok dengan mu?</h5>
				<h4>15 pertanyaan</h4> 
				<button class="standartbutton">Play</button>
			</div>

			<div class="areaquiz" style="margin-bottom: 30px;">
				<h5>Apa Kegiatan yang cocok dengan mu?</h5>
				<h4>15 pertanyaan</h4> 
				<button class="standartbutton">Play</button>
			</div>
	</div>

<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	}
</script>
</body>
</html>