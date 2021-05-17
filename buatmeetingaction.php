<?php 
session_start();
include "koneksi.php";

$image = $_POST['image'];
$judul = $_POST['judul'];
$image_pembuat = $_POST['profile_image'];
$nama_pembuat = $_POST['nama_pembuat'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$link_meeting = $_POST['link_meeting'];

$sql = "INSERT INTO tbmeeting (image, judul, image_pembuat, nama_pembuat, deskripsi, tanggal, waktu, link_meeting)
                        VALUES('$image', '$judul', '$image_pembuat', '$nama_pembuat', '$deskripsi', '$tanggal', '$waktu', '$link_meeting');";
$query = mysqli_query($conn, $sql);

header("Location: konseling.php");
?>