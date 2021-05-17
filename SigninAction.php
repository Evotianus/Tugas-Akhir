<?php 
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM tbuser WHERE email='$email' AND password='$password'");
$numrows = mysqli_num_rows($query);

$result = mysqli_fetch_array($query);
$no = $result['no'];
$profile_image = $result['profile_image'];
$nama = $result['nama'];

echo $no;

if ($numrows == 0 || $numrows == null) {
    echo "<script>
            alert('Login Gagal!');
            location.href = 'Signin.php';
            </script>";
} else {
    $_SESSION["profile_image"] = $profile_image;
    $_SESSION["no"] = $no;
    $_SESSION["nama"] = $nama;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;

    header("location: home.php");
}
?>