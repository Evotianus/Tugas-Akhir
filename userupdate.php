<?php 
include "koneksi.php";

$no = $_POST['no'];
$profile = $_POST['image_profile'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql1 = "UPDATE tbuser SET profile_image='$profile', nama='$nama', email='$email', password='$password' WHERE no='$no'";
$query = mysqli_query($conn, $sql1);

header("Location: Signin.php");
?>