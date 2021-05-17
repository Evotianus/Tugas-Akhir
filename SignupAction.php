<?php 
	include 'koneksi.php';

	$nama = $_POST['nama'];
    $email = $_POST['email'];
	$password = $_POST['password'];

	if($submit = "Register"){
		$query = mysqli_query($conn, "INSERT INTO tbuser (nama, email, password)
			                VALUES('$nama', '$email', '$password');");
		if($query) {
		    echo "<script>
		    alert('Register Berhasil!');
		    location.href = 'Signin.php';
			</script>";
		}
		else{
			echo "<script>
			alert('Register Gagal!');
			location.href = 'Signup.php';
			</script>";
		}
	}
?>