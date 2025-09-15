<?php 
include '../koneksi.php';

// menangkap data yang dikirmkan dari form
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

// input data ke tabel pelanggan
mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('','$nama','$hp', '$alamat')");

header("location:pelanggan.php");
?>