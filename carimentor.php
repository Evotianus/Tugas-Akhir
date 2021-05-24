<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/99d577495c.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cari Mentor Mu!</title>
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
		<h1 style="margin-top: 30px;">Meeting Akan Datang</h1>
	</div>

	<div class="setting">
		<button type="button" data-toggle="modal" data-target="#exampleModalCenter" style="border: none; background-color: transparent;">
		  <i class="fa fa-sliders-h "></i>
		</button>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h1 class="modal-title" id="exampleModalLongTitle" style="text-align: center;">Filter</h1>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<table border="0">
			      <tr>
	                <td>Topic</td>
	              </tr>

	              <tr>
	              	<td>
		              	<input type="radio" name="topic" id="school" value="school" style="width: 30px;"> School

						<input type="radio" name="topic" id="event" value="event" style="width: 30px;"> Event

						<input type="radio" name="topic" id="campuss" value="campuss" style="width: 30px;"> Campuss
					</td>
				</tr>

	              <tr>
	                <td>
	                  <input style="border-radius: 5px; margin-top: 20px; width: 100%; margin-bottom: 20px;" type="date" placeholder="Tanggal">
	                </td>
	              </tr>

	              <tr>
	                <td>Waktu</td>
	              </tr>

	              <tr>
	              	<td>
	              		<input type="time" style="width: 150px;">
	              		<input type="time" style="width: 150px;">
	              	</td>
	              </tr>
          		</table>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" style="width: 100%">Terapkan</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="buttonbuat">
			<button class="standartbutton" style="float: right; margin-right: 100px; margin-top: -60px;">Buat</button>
		</div>
	</div>

	<div class="konseling text-center">
		<img src="./image/Thumbnail.png">
		<h2 style="font-weight: 400;">Gimana Cara Menjawab Quiz Dengan Cepat?</h2>

		<div class="userprofile">
			<img src="./image/profile2.jpg"> <span>Horsea</span>
		</div>

		<div class="button" style="float: right;">
			<button class="detail" onclick="window.location.href='detail.php'">Detail</button>
			<button class="join">Join</button>
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