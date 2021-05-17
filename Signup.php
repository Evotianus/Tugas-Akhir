<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
</head>
<body>
	<div class="container text-center">
		<div class="logo1">
			<img src="./image/Logo.png">
		</div>

		<div class="isi1">
			<h1>SIGN UP</h1>

		<form action="SignupAction.php" method="POST">
			<div class="form1">
			 	<p>Nama</p>
			 	<input type="text" name="nama" id="nama">

			 	<p>E-Mail</p>
			 	<input type="email" name="email" id="email">

			 	<p>Password</p>
			 	<input type="Password" name="password" id="password">
			</div>
		</div>

		<div class="button1">
			<button>Sign Up</button>
		</div>
		</form>
	</div>

</body>
</html>