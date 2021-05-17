<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign In</title>
</head>
<body>
	<div class="container text-center">
		<div class="logo1">
			<img src="./image/Logo.png">
		</div>

		<form action="SigninAction.php" method="POST">
			<div class="isi1">
				<h1>SIGN IN</h1>
				<div class="form1">
					<p>E-Mail</p>
					<input type="email" name="email" id="email">

					<p>Password</p>
					<input type="password" name="password" id="password">

					<p>Don't have any account yet? <a href="Signup.php">Sign Up</a> now!</p>
				</div>
			</div>

		<div class="button1">
			<button>Sign In</button>
		</div>
		</form>
	</div>

</body>
</html>